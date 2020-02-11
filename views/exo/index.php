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

            'id',
            'ssid',
            'type',
            'rising',
            'squats',
            //'turn_left',
            //'turn_right',
            //'errors_count',
            //'worked_hours',
            //'steps_done',
            //'log_file:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
