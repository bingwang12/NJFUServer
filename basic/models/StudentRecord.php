<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "StudentRecord".
 *
 * @property string $ID
 * @property integer $Score
 * @property string $LastRecord
 */
class StudentRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'StudentRecord';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Score', 'LastRecord'], 'required'],
            [['Score'], 'integer'],
            [['LastRecord'], 'safe'],
            [['ID'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => '学号',
            'Score' => '次数',
            'LastRecord' => '最后时间',
        ];
    }

    /**
     * @inheritdoc
     * @return StudentRecordQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentRecordQuery(get_called_class());
    }
}
