<?php

/**
 * This is the model class for table "action".
 *
 * The followings are the available columns in table 'action':
 * @property integer $id
 * @property string $name
 * @property string $description
 */
class Action extends CActiveRecord
{
    public function tableName()
    {
        return 'action';
    }

    public function rules()
    {
        return array(
            array('name, description', 'required'),
            array('name', 'length', 'max'=>255),
            array('description', 'length', 'max'=>500),
            array('id, name, description', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        return array(
            // define any relations with other models here, if any
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
        );
    }

    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('description',$this->description,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
