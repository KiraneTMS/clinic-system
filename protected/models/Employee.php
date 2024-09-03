<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property string $name
 * @property string $position
 * @property string $department
 */
class Employee extends CActiveRecord
{
    public function tableName()
    {
        return 'employee';
    }

    public function rules()
    {
        return array(
            array('name, position, department', 'required'),
            array('name, position, department', 'length', 'max'=>255),
            array('id, name, position, department', 'safe', 'on'=>'search'),
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
            'position' => 'Position',
            'department' => 'Department',
        );
    }

    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('position',$this->position,true);
        $criteria->compare('department',$this->department,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
