<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Exoskeleton;

class SiteController extends Controller
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

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

 
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        
         if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

   
}
 
 function debug($arr)
    {
        echo '<pre>' . print_r($arr,true) . '</pre>' ;
    }
