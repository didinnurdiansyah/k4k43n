<?php

/**
 * This is the model class for table "kelompok".
 *
 * The followings are the available columns in table 'kelompok':
 * @property string $id
 * @property string $lokasi
 * @property string $kabupatenId
 * @property string $kecamatanId
 * @property string $programKknId
 * @property string $latitude
 * @property string $longitude
 * @property string $created
 * @property string $modified
 */
class Kelompok extends ActiveRecord
{
    protected $displayField = 'nama';
    /**
     * Returns the static model of the specified AR class.
     * @return Kelompok the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'kelompok';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    { 
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('lokasi, kabupatenId, kecamatanId, programKknId', 'required'),
            array('lokasi', 'length', 'max'=>255),
            array('latitude, longitude', 'numerical'),
            array('kabupatenId, kecamatanId, programKknId', 'length', 'max'=>20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, lokasi, kabupatenId, kecamatanId, programKknId, created, modified', 'safe', 'on'=>'search'),
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
            'kabupaten' => array(self::BELONGS_TO, 'Kabupaten', 'kabupatenId'),
            'kecamatan' => array(self::BELONGS_TO, 'Kecamatan', 'kecamatanId'),
            'anggota' => array(self::HAS_MANY, 'Mahasiswa','kelompokId'),
            'programKkn' => array(self::BELONGS_TO,'ProgramKkn','programKknId'),
            'mahasiswa' => array(self::HAS_MANY, 'Mahasiswa','kelompokId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('app','ID'),
            'lokasi' => Yii::t('app','Lokasi'),
            'kabupatenId' => Yii::t('app','Kabupaten'),
            'kecamatanId' => Yii::t('app','Kecamatan'),
            'programKknId' => Yii::t('app','Program KKN'),
            'created' => Yii::t('app','Created'),
            'modified' => Yii::t('app','Modified'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria=new CDbCriteria;
        $criteria->compare('id',$this->id,true);
        $criteria->compare('lokasi',$this->lokasi,true);
        $criteria->compare('kabupatenId',$this->kabupatenId,true);
        $criteria->compare('kecamatanId',$this->kecamatanId,true);
        $criteria->compare('programKknId',$this->programKknId,true);
        $criteria->compare('created',$this->created,true);
        $criteria->compare('modified',$this->modified,true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
        ));
    }
    
    protected function beforeSave()
    {
        $this->lokasi = ucwords(strtolower($this->lokasi));
        return parent::beforeSave();
    }
    
    /**
     * kelompok yang di tampilkan memiliki criteria
     * 1. Menjadi prioritas dan jumlah mahasiswa dengan jenis kelamin
     * sama dengan mahasiswa yang mendaftarr kurang dari atau sama dengan 
     * jumlah maksimal
     */
    public function findAvailableKelompok($mahasiswa, $level = 1)
    {
        if (!is_object($mahasiswa)) {
            $mahasiswa = Mahasiswa::model()->findByPk($mahasiswa);
        }
        
        if($mahasiswa->jenisKelamin === Mahasiswa::LAKI_LAKI) {
            $jkMax = $this->countMaxLakiLaki();
        } else {
            $jkMax = $this->countMaxPerempuan();
        }
        
        $ = $this->countLakiLaki();
        $perempuan = $this->countPerempuan();
        
        $criteria = CDbCriteria;
        $criteria->condition = '';
        $criteria->with = array('mahasiswa');
        return $this->findAll($criteria);
    }
    
    
    public function getNama()
    {
        return "[{$this->programKkn->nama}] {$this->lokasi}";// someting
    }
    
    public function countMaxAnggota()
    {
        return ceil(Mahasiswa::model()->count() / $this->count());
    }
    
    public function countMaxLakiLaki()
    {
        return ceil(Mahasiswa::model()->countLakiLaki() / $this->count());
    }
    
    public function countMaxPerempuan()
    {
        return ceil(Mahasiswa::model()->countPerempuan() / $this->count());
    }
}
