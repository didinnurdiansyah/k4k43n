<?php

abstract class ActiveRecord extends CActiveRecord
{
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
    
}
