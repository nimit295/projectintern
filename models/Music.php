<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "music".
 *
 * @property integer $id
 * @property string $name
 * @property string $authoor
 * @property double $price
 * @property integer $date
 * @property string $producer
 */
class Music extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'music';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['date'], 'integer'],
            [['name', 'producer'], 'string', 'max' => 50],
            [['authoor'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อ',
            'authoor' => 'ผู้แต่ง',
            'price' => 'ราคา',
            'date' => 'วันที่',
            'producer' => 'Producer',
        ];
    }
}
