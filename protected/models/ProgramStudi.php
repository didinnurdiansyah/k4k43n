<?php

/**
 * This is the model class for table "program_studi".
 *
 * The followings are the available columns in table 'program_studi':
 * @property string $id
 * @property string $nama
 * @property string $jurusanId
 * @property string $fakultasId
 * @property string $created
 * @property string $modified
 */
class ProgramStudi extends ActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return ProgramStudi the static model class
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
        return 'program_studi';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    { 
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nama, kode, fakultasId, jurusanId', 'required'),
            array('nama, kode', 'length', 'max'=>255),
            array('jurusanId, fakultasId', 'length', 'max'=>20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, nama, kode, jurusanId, fakultasId, created, modified', 'safe', 'on'=>'search'),
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
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('app','ID'),
            'nama' => Yii::t('app','Nama'),
            'kode' => Yii::t('app','Kode'),
            'fakultasId' => Yii::t('app','Fakultas'),
            'jurusanId' => Yii::t('app','Jurusan'),
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
        $criteria->compare('nama',$this->nama,true);
        $criteria->compare('kode',$this->kode,true);
        $criteria->compare('jurusanId',$this->jurusanId,true);
        $criteria->compare('fakultasId',$this->fakultasId,true);
        $criteria->compare('created',$this->created,true);
        $criteria->compare('modified',$this->modified,true);
        //$criteria->with = array('jurusan','fakultas');
        
        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
        ));
    }
}
