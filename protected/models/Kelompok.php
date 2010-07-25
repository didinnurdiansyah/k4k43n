<?php

/**
 * This is the model class for table "kelompok".
 *
 * The followings are the available columns in table 'kelompok':
 * @property string $id
 * @property string $nama
 * @property string $kabupatenId
 * @property string $kecamatanId
 * @property string $created
 * @property string $modified
 */
class Kelompok extends ActiveRecord
{
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
            array('nama, kabupatenId, kecamatanId', 'required'),
            array('nama', 'length', 'max'=>255),
            array('kabupatenId, kecamatanId', 'length', 'max'=>20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, nama, kabupatenId, kecamatanId, created, modified', 'safe', 'on'=>'search'),
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
            'kecamatan' => array(self::BELONGS_TO, 'Kecamatan','kecamatanId'),
            'kabupaten' => array(self::BELONGS_TO, 'Kabupaten','kebupatenId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'Id',
            'nama' => 'Nama',
            'kabupatenId' => 'Kabupaten',
            'kecamatanId' => 'Kecamatan',
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

        $criteria->compare('nama',$this->nama,true);

        $criteria->compare('kabupatenId',$this->kabupatenId,true);

        $criteria->compare('kecamatanId',$this->kecamatanId,true);

        $criteria->compare('created',$this->created,true);

        $criteria->compare('modified',$this->modified,true);

        return new CActiveDataProvider('Kelompok', array(
            'criteria'=>$criteria,
        ));
    }
}
