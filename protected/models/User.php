<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $role
 */
class User extends CActiveRecord
{
    public function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return array(
            array('username, password, role', 'required'),
            array('username, password, role', 'length', 'max'=>255),
            array('id, username, role', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        return array(
            // define any relations with other models here
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
        );
    }

    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('username',$this->username,true);
        $criteria->compare('role',$this->role,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
