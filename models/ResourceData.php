<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resource_data".
 *
 * @property string $rd_id
 * @property string $rd_type
 * @property string $rd_commonName
 * @property string $rd_localName
 * @property string $rd_scienceName
 * @property string $rd_familyName
 * @property string $rd_nature
 * @property string $rd_area
 * @property string $rd_benefit
 * @property string $rd_picture
 * @property string $rd_other
 */
class ResourceData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resource_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rd_type', 'rd_commonName', 'rd_localName', 'rd_scienceName', 'rd_familyName', 'rd_picture'], 'string', 'max' => 255],
            [['rd_nature', 'rd_area', 'rd_benefit'], 'string', 'max' => 4095],
            [['rd_other'], 'string', 'max' => 511],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rd_id' => 'Rd ID',
            'rd_type' => 'ชนิดของทรัพยากร',
            'rd_commonName' => 'ชื่อสามัญ',
            'rd_localName' => 'ชื่อท้องถิ่น/อื่นๆ',
            'rd_scienceName' => 'ชื่อทางวิทยาศาสตร์',
            'rd_familyName' => 'ชื่อวงศ์',
            'rd_nature' => 'ลักษณะทั่วไป /ข้อมูลทั่วไป',
            'rd_area' => 'พื้นที่วิจัยที่พบ /แหล่งที่พบ',
            'rd_benefit' => 'การศึกษาวิจัย /การใช้ประโยชน์',
            'rd_picture' => 'รูปภาพอื่นๆ',
            'rd_other' => 'ข้อมูลอื่นๆ',
        ];
    }
}
