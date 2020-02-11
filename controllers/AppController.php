<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class Appcontroller extends Controller
{
	 /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [ 
            'as beforeRequest' => [
                  'class' => 'yii\filters\AccessControl',
                 'rules' => [['allow' => true,'actions' => ['login'],], ['allow' => true,  'roles' => ['@'],],], 

                'denyCallback' => function () {
        return Yii::$app->response->redirect(['site/login']);
    },



],

        ];
    }

}

?>