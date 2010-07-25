<?php

class User extends ActiveRecord
{
    /**
     * The followings are the available columns in table 'user':
     * @var string $id
     * @var string $username
     * @var string $password
     * @var string $email
     * @var string $created
     * @var string $modified
     */

    /**
     * Returns the static model of the specified AR class.
     * @return User the static model class
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
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, email', 'required'),
            array('username, password, email', 'length', 'max'=>255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, password, email, created, modified', 'safe', 'on'=>'search'),
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
            'posts' => array(self::HAS_MANY, 'Post', 'authorId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'Id',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
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

        $criteria->compare('username',$this->username,true);

        $criteria->compare('password',$this->password,true);

        $criteria->compare('email',$this->email,true);

        $criteria->compare('created',$this->created,true);

        $criteria->compare('modified',$this->modified,true);

        return new CActiveDataProvider('User', array(
            'criteria'=>$criteria,
        ));
    }
}
