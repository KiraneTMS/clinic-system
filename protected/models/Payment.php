<?php

/**
 * This is the model class for table "payment".
 *
 * The followings are the available columns in table 'payment':
 * @property integer $id
 * @property integer $patient_id
 * @property float $amount
 * @property string $status
 */
class Payment extends CActiveRecord
{
    public function tableName()
    {
        return 'payment';
    }

    public function rules()
    {
        return array(
            array('patient_id, amount, status', 'required'),
            array('patient_id', 'numerical', 'integerOnly'=>true),
            array('amount', 'numerical'),
            array('status', 'length', 'max'=>255),
            array('id, patient_id, amount, status', 'safe', 'on'=>'search'),
        );
    }

    public function relations()
    {
        return array(
            'patient' => array(self::BELONGS_TO, 'Patient', 'patient_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'amount' => 'Amount',
            'status' => 'Status',
        );
    }

    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('patient_id',$this->patient_id);
        $criteria->compare('amount',$this->amount);
        $criteria->compare('status',$this->status,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
