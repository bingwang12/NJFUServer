<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Record".
 *
 * @property integer $Record_ID
 * @property string $ID
 * @property string $Time
 * @property integer $Synced
 */
class Record extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Time', 'Synced'], 'required'],
            [['Time'], 'safe'],
            [['Synced'], 'integer'],
            [['ID'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Record_ID' => '记录编号',
            'ID' => '学号',
            'Time' => '时间',
            'Synced' => '同步',
        ];
    }

    /**
     * @inheritdoc
     * @return RecordQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RecordQuery(get_called_class());
    }
}
