<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Student".
 *
 * @property string $ID
 * @property string $Name
 * @property string $CardID
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Name', 'CardID'], 'required'],
            [['ID', 'Name', 'CardID'], 'string', 'max' => 20],
            [['ID'], 'unique'],
            [['CardID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => '学号',
            'Name' => '姓名',
            'CardID' => '卡号',
        ];
    }

    /**
     * @inheritdoc
     * @return StudentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentQuery(get_called_class());
    }
}
