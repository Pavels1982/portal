<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exoskeleton".
 *
 * @property int $id
 * @property int $serial_number
 * @property string $sale_date
 * @property string $company
 * @property string $company_location
 * @property string $company_website
 * @property string $company_email
 * @property string $company_phone
 * @property string $contact_name ФИО Контактного лица (специалист по работе с экзоскелетом)
 * @property string $contact_phone Номер телефона контактного лица
 * @property string $contact_email
 * @property string $ssid
 * @property string $type
 * @property int $worked_hours
 * @property int $errors_count
 * @property int $steps_done
 * @property int $squats
 * @property int $rising
 * @property int $turn_left
 * @property int $turn_right
 * @property string $log_file
 * @property string $document_file
 */
class Exoskeleton extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exoskeleton';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_number', 'sale_date', 'company', 'company_location', 'company_website', 'company_email', 'company_phone', 'contact_name', 'contact_phone', 'contact_email', 'ssid', 'type', 'worked_hours', 'errors_count', 'steps_done', 'squats', 'rising', 'turn_left', 'turn_right', 'log_file', 'document_file'], 'required'],
            [['serial_number', 'worked_hours', 'errors_count', 'steps_done', 'squats', 'rising', 'turn_left', 'turn_right'], 'integer'],
            [['sale_date'], 'safe'],
            [['company', 'company_location', 'company_website', 'company_email', 'company_phone', 'contact_name', 'contact_email', 'log_file', 'document_file'], 'string', 'max' => 255],
            [['contact_phone'], 'string', 'max' => 50],
            [['ssid'], 'string', 'max' => 10],
            [['type'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'serial_number' => 'Серийный №',
            'sale_date' => 'Дата продажи',
            'company' => 'Компания',
            'company_location' => 'Адрес',
            'company_website' => 'Сайт',
            'company_email' => 'Электронный адрес',
            'company_phone' => 'Телефон',
            'contact_name' => 'Контактное лицо',
            'contact_phone' => 'Контактный телефон',
            'contact_email' => 'Контактный email',
            'ssid' => 'SSID',
            'type' => 'Тип',
            'worked_hours' => 'Время наработки',
            'errors_count' => 'Кол-во ошибок',
            'steps_done' => 'Всего шагов',
            'squats' => 'Приседаний',
            'rising' => 'Вставаний',
            'turn_left' => 'Поворотов налево',
            'turn_right' => 'Поворотов направо',
            'log_file' => 'Log File',
            'document_file' => 'Document File',
        ];
    }
}
