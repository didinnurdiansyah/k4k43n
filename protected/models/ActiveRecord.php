<?php

abstract class ActiveRecord extends CActiveRecord
{
    protected $_displayField = null;
    
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
    
    public function formatCurrency($number, $currency = 'IDR')
    {
        if(Yii::app()->language === 'id'){
            
            return $currency . ' ' . number_format($number,2,',','.');
        }
        return $currency . ' ' . number_format($number,2,'.',',');
    }
    
    public function toJSON()
    {
        return CJSON::encode($this->attributes);
    }
    
    public function getDisplayField()
    {
        if ($this->_displayField !== null) {
            return $this->_displayField;
        } else {
            throw new CException(Yii::t('app','Isi property $_displayField pada class {class} dengan column yang akan ditampilkan menjadi text data',array(
                '{class}' => get_class($this)
            )));
        }
        
    }
    public function setDisplayField($field)
    {
        $this->_displayField = $field;
    }
    public function getListData()
    {
        return CHtml::listData($this->findAll(),'id',$this->displayField);
    }
    
}
