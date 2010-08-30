<?php

/**
 * This is the model class for table "prioritas".
 *
 * The followings are the available columns in table 'prioritas':
 * @property string $id
 * @property string $programKknId
 * @property string $jurusanId
 * @property string $created
 * @property string $modified
 */
class Prioritas extends ActiveRecord
{
    public $fakultasId;
    /**
     * Returns the static model of the specified AR class.
     * @return Prioritas the static model class
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
        return 'prioritas';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    { 
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('programKknId, fakultasId, level, jurusanId', 'required'),
            array('programKknId, jurusanId', 'length', 'max'=>20),
            array('level', 'length', 'max'=>2),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, level, programKknId, jurusanId, created, modified', 'safe', 'on'=>'search'),
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
            'level' => Yii::t('app','Level Prioritas'),
            'programKknId' => Yii::t('app','Program Kkn'),
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
        $criteria->compare('id',$this->level,true);
        $criteria->compare('programKknId',$this->programKknId,true);
        $criteria->compare('jurusanId',$this->jurusanId,true);
        $criteria->compare('created',$this->created,true);
        $criteria->compare('modified',$this->modified,true);
        
        $criteria->order = 'level';

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
            'pagination' => array(
                'pageSize' => 100
            )
        ));
    }
    
    protected function beforeSave()
    {
        return parent::beforeSave();
    }
    
    protected function beforeValidate()
    {
        $prioritas = $this->findByAttributes(array(
            'jurusanId' => $this->jurusanId,
            'programKknId' => $this->programKknId,
        ));
        if($prioritas !== null){
            $this->addError('jurusanId',Yii::t('app','Jurusan ini sudah ada'));
            return false;
        }
        return parent::beforeValidate();
    }
}
