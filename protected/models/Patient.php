<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $gender
 */
class Patient extends CActiveRecord
{
    public function tableName()
    {
        return 'patient';
    }

    public function rules()
    {
        return array(
            array('name, age, gender', 'required'),
            array('name', 'length', 'max'=>255),
            array('gender', 'in', 'range'=>array('Male', 'Female')),
            array('age', 'numerical', 'integerOnly'=>true),
            array('id, name, age, gender', 'safe', 'on'=>'search'),
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
            'age' => 'Age',
            'gender' => 'Gender',
        );
    }

    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('age',$this->age);
        $criteria->compare('gender',$this->gender,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
