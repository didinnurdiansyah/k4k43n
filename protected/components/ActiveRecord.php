<?php

abstract class ActiveRecord extends CActiveRecord
{
    public function behaviors(){
        return array(
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
    
}

