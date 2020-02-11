<?php
namespace app\model;

use Yii;
use yii\base\Madel;
use yii\web\UploadedFile;

class ImageUpload extends Model{
		
	public $image;
	

	public function uploadFile(UploadedFile $file)
	{
		$file->saveAs(Yii::getAlias('@web') . 'uploads/' . $file->name);
		return $file->name;
	}

}

?>
