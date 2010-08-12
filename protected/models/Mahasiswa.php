<?php

/**
 * This is the model class for table "mahasiswa".
 *
 * The followings are the available columns in table 'mahasiswa':
 * @property string $id
 * @property string $namaLengkap
 * @property string $alamatAsal
 * @property string $alamatTinggal
 * @property string $fakultasId
 * @property string $jurusanId
 * @property string $kelompokId
 * @property string $programStudiId
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
            array('namaLengkap, alamatAsal, alamatTinggal, fakultasId, jurusanId, kelompokId, programStudiId, jenisKelamin, created, modified', 'required'),
            array('jenisKelamin', 'numerical', 'integerOnly'=>true),
            array('namaLengkap, alamatAsal, alamatTinggal', 'length', 'max'=>255),
            array('fakultasId, jurusanId, kelompokId, programStudiId', 'length', 'max'=>20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, namaLengkap, alamatAsal, alamatTinggal, fakultasId, jurusanId, kelompokId, programStudiId, jenisKelamin, created, modified', 'safe', 'on'=>'search'),
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
            'alamatAsal' => Yii::t('app','Alamat Asal'),
            'alamatTinggal' => Yii::t('app','Alamat Tinggal'),
            'fakultasId' => Yii::t('app','Fakultas'),
            'jurusanId' => Yii::t('app','Jurusan'),
            'kelompokId' => Yii::t('app','Kelompok'),
            'programStudiId' => Yii::t('app','Program Studi'),
            'jenisKelamin' => Yii::t('app','Jenis Kelamin'),
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
        $criteria->compare('namaLengkap',$this->namaLengkap,true);
        $criteria->compare('alamatAsal',$this->alamatAsal,true);
        $criteria->compare('alamatTinggal',$this->alamatTinggal,true);
        $criteria->compare('fakultasId',$this->fakultasId,true);
        $criteria->compare('jurusanId',$this->jurusanId,true);
        $criteria->compare('kelompokId',$this->kelompokId,true);
        $criteria->compare('programStudiId',$this->programStudiId,true);
        $criteria->compare('jenisKelamin',$this->jenisKelamin);
        $criteria->compare('created',$this->created,true);
        $criteria->compare('modified',$this->modified,true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
        ));
    }
}
