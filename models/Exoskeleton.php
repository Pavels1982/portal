<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exoskeletons".
 *
 * @property int $id
 * @property string $ssid
 * @property int $type
 * @property int $rising
 * @property int $squats
 * @property int $turn_left
 * @property int $turn_right
 * @property int $errors_count
 * @property int $worked_hours
 * @property int $steps_done
 * @property string $log_file
 */
class Exoskeleton extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exoskeletons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ssid', 'type','worked_hours',  'rising', 'squats', 'turn_left', 'turn_right', 'errors_count', 'steps_done', 'log_file'], 'required'],
            [['type', 'rising', 'squats', 'turn_left', 'turn_right', 'errors_count', 'worked_hours', 'steps_done'], 'integer'],
            [['log_file'], 'string'],
            [['ssid'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'ssid' => 'ID',
            'type' => 'Исполнение',
            'steps_done' => 'Время наработки',
            'rising' => 'Rising',
            'squats' => 'Squats',
            'turn_left' => 'Turn Left',
            'turn_right' => 'Turn Right',
            'errors_count' => 'Errors Count',
            'worked_hours' => 'Worked Hours',
            'log_file' => 'Log File',
        ];
    }
}
