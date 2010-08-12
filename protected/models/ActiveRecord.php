<?php

abstract class ActiveRecord extends CActiveRecord
{
    protected $displayField = 'name';
    
    public function behaviors(){
        return array(
            'CSaveRelationsBehavior' => array(
                'class' => 'application.components.CSaveRelationsBehavior'
            ),
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'created',
                'updateAttribute' => 'modified',
            )
        );
        
    }
    
    public function __toString()
    {
        return $this->name?$this->name:$this->id;
    }
    
    
    
    public function toJSON()
    {
        return CJSON::encode($this->attributes);
    }
    
    public function displayField()
    {
        if ($this->displayField !== null) {
            return $this->displayField;
        } else {
            throw new CException(Yii::t('app','Isi property $displayField pada class {class} dengan column yang akan ditampilkan menjadi text data',array(
                '{class}' => get_class($this)
            )));
        }
        
    }
    
    public function getListData()
    {
        return CHtml::listData($this->findAll(),'id',$this->displayField());
    }
    
}
