<?php

namespace app\models;


use yii\db\ActiveRecord;

class Pay extends ActiveRecord
{
    public static function tableName()
    {
        return 'pay';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'purpose_pay' => 'PurposeOfPay',
            'price' => "Price",
        ];
    }

    public function fields()
    {
        return [
            'purpose_pay',
            'price',
        ];
    }
}