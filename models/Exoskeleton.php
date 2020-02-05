<?php 
namespace app\models;

use yii\db\ActiveRecord;


class Exoskeleton extends ActiveRecord
{
	public static function tableName()
	{
		return 'exoskeletons';
	}
	
}
?>