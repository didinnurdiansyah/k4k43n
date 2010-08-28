<?php

/**
 * This is the model class for table "mahasiswa".
 *
 * The followings are the available columns in table 'mahasiswa':
 * @property string $id
 * @property string $namaLengkap
 * @property string $nim
 * @property string $alamatAsal
 * @property string $alamatTinggal
 * @property string $fakultasId
 * @property string $jurusanId
 * @property string $kelompokId
 * @property string $jenjangId
 * @property integer $jenisKelamin
 * @property string $created
 * @property string $modified
 */
class Mahasiswa extends ActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return Mahasiswa the static model class
     */
    const PEREMPUAN = 'Perempuan';
    const LAKI_LAKI = 'Laki-laki'; 
    
    public $password;
    public $confirmPassword;
    public $email;
    public $verifyCode;
    public $file;
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    { 
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('password, confirmPassword, email, namaLengkap, phone1, nim, alamatAsal, alamatTinggal, fakultasId, jurusanId, jenjangId, jenisKelamin', 'required'),
            array('userId, registered', 'numerical', 'integerOnly'=>true),
            array('nim', 'numerical'),
            array('email','email'),
            array('jenisKelamin, namaLengkap, phone1, phone2, alamatAsal, alamatTinggal', 'length', 'max'=>255),
            array('userId, fakultasId, nim, jurusanId, kelompokId, jenjangId', 'length', 'max'=>20),
            array('confirmPassword', 'compare', 'compareAttribute'=>'password'),
            array('verifyCode', 'captcha', 'allowEmpty'=>!extension_loaded('gd')),
            array('file', 'file', 'types'=>'jpg, jpeg, png, gif','allowEmpty' => true),
            
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, namaLengkap, nim, registered, alamatAsal, alamatTinggal, fakultasId, jurusanId, kelompokId, jenjangId, jenisKelamin, created, modified', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'jenjang' => array(self::BELONGS_TO, 'Jenjang','jenjangId'),
            'fakultas' => array(self::BELONGS_TO, 'Fakultas','fakultasId'),
            'jurusan' => array(self::BELONGS_TO, 'Jurusan','jurusanId'),
            'kelompok' => array(self::BELONGS_TO, 'Kelompok','kelompokId'),
            'user' => array(self::BELONGS_TO, 'User','userId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('app','ID'),
            'namaLengkap' => Yii::t('app','Nama Lengkap'),
            'nim' => Yii::t('app','NIM'),
            'alamatAsal' => Yii::t('app','Alamat Asal'),
            'alamatTinggal' => Yii::t('app','Alamat Tinggal'),
            'fakultasId' => Yii::t('app','Fakultas'),
            'jurusanId' => Yii::t('app','Jurusan'),
            'kelompokId' => Yii::t('app','Kelompok'),
            'jenjangId' => Yii::t('app','Jenjang'),
            'jenisKelamin' => Yii::t('app','Jenis Kelamin'),
            'phone1' => Yii::t('app','Phone 1'),
            'phone2' => Yii::t('app','Phone 2'),
            'password' => Yii::t('app','Password'),
            'confirmPassword' => Yii::t('app','Confirm Password'),
            'created' => Yii::t('app','Created'),
            'modified' => Yii::t('app','Modified'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search($pageSize = 10)
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria=new CDbCriteria;
        $criteria->compare('id',$this->id,true);
        $criteria->compare('namaLengkap',$this->namaLengkap, true);
        $criteria->compare('nim',$this->nim);
        $criteria->compare('alamatAsal',$this->alamatAsal,true);
        $criteria->compare('alamatTinggal',$this->alamatTinggal,true);
        $criteria->compare('fakultasId',$this->fakultasId);
        $criteria->compare('jurusanId',$this->jurusanId);
        $criteria->compare('kelompokId',$this->kelompokId);
        $criteria->compare('jenjangId',$this->jenjangId);
        $criteria->compare('jenisKelamin',$this->jenisKelamin);
        $criteria->compare('registered',$this->registered);
        $criteria->compare('created',$this->created,true);
        $criteria->compare('modified',$this->modified,true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
            'pagination' => array(
                'pageSize' => $pageSize
            )
        ));
    }
    
    protected function beforeSave()
    {
        $this->namaLengkap = ucwords(strtolower($this->namaLengkap));
        $this->saveUser();
        return parent::beforeSave();
    }
    
    protected function afterSave()
    {
        return parent::afterSave();
    }
    
    private function saveUser()
    {
        if ($this->user === null) {
            $this->user = new User;
        }
        $this->user->username = $this->nim;
        $this->user->email = $this->email;
        $this->user->password = $this->password;
        if ($this->user->save()) {
            $this->userId = $this->user->id;
        }
        
    }
    
    public function findByUserId($userId)
    {
        return $this->findByAttributes(array('userId' => $userId));
    }
    
    public function findByNIM($nim)
    {
        return $this->findByAttributes(array('nim' => $nim));
    }
    
    public function countLakiLaki()
    {
        return $this->count('jenisKelamin = :jk',array('jk' => self::LAKI_LAKI));
    }
    
    public function countPerempuan()
    {
        return $this->count('jenisKelamin = :jk',array('jk' => self::PEREMPUAN));
    }
    
    
    public function getKodeJenjang()
    {
        return $this->jenjang?$this->jenjang->kode:'unset';
    }
    public function getKodeFakultas()
    {
        return $this->fakultas?$this->fakultas->kode:'unset';
    }
    public function getKodeJurusan()
    {
        return $this->jurusan?$this->jurusan->kode:'unset';
    }
    
    
}
