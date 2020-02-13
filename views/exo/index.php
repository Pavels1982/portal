<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Все экзоскелеты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exoskeleton-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Exoskeleton', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'type',
            'serial_number',
            'sale_date',
            'company',
            'worked_hours',
            // 'company_location',
            //'company_website',
            //'company_email:email',
            //'company_phone',
            //'contact_name',
            //'contact_phone',
            //'contact_email:email',
            //'ssid',
            //'type',
            //'worked_hours',
            //'errors_count',
            //'steps_done',
            //'squats',
            //'rising',
            //'turn_left',
            //'turn_right',
            //'log_file',
            //'document_file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
