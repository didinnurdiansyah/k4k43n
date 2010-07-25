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
            array('namaLengkap, alamatAsal, alamatTinggal, fakultasId, jurusanId, programStudiId, jenisKelamin', 'required'),
            array('jenisKelamin', 'numerical', 'integerOnly'=>true),
            array('namaLengkap, alamatAsal, alamatTinggal', 'length', 'max'=>255),
            array('fakultasId, jurusanId, programStudiId', 'length', 'max'=>20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, namaLengkap, alamatAsal, alamatTinggal, fakultasId, jurusanId, programStudiId, jenisKelamin, created, modified', 'safe', 'on'=>'search'),
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
            'fakultas' => array(self::BELONGS_TO, 'Fakultas','fakultasId'),
            'jurusan' => array(self::BELONGS_TO, 'Jurusan','jurusanId'),
            'programStudi' => array(self::BELONGS_TO, 'ProgramStudi','programStudiId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'Id',
            'namaLengkap' => 'Nama Lengkap',
            'alamatAsal' => 'Alamat Asal',
            'alamatTinggal' => 'Alamat Tinggal',
            'fakultasId' => 'Fakultas',
            'jurusanId' => 'Jurusan',
            'programStudiId' => 'Program Studi',
            'jenisKelamin' => 'Jenis Kelamin',
            'created' => 'Created',
            'modified' => 'Modified',
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

        $criteria->compare('programStudiId',$this->programStudiId,true);

        $criteria->compare('jenisKelamin',$this->jenisKelamin);

        $criteria->compare('created',$this->created,true);

        $criteria->compare('modified',$this->modified,true);

        return new CActiveDataProvider('Mahasiswa', array(
            'criteria'=>$criteria,
        ));
    }
}
