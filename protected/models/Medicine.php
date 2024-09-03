<?php

/**
 * This is the model class for table "medicine".
 *
 * The followings are the available columns in table 'medicine':
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property float $price
 */
class Medicine extends CActiveRecord
{
    public function tableName()
    {
        return 'medicine';
    }

    public function rules()
    {
        return array(
            array('name, type, price', 'required'),
            array('name, type', 'length', 'max'=>255),
            array('price', 'numerical'),
            array('id, name, type, price', 'safe', 'on'=>'search'),
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
            'type' => 'Type',
            'price' => 'Price',
        );
    }

    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('type',$this->type,true);
        $criteria->compare('price',$this->price);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
