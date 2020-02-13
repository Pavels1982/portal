<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Exoskeleton */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Exoskeletons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="exoskeleton-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'serial_number',
            'sale_date',
            'company',
            'company_location',
            'company_website',
            'company_email:email',
            'company_phone',
            'contact_name',
            'contact_phone',
            'contact_email:email',
            'ssid',
            'type',
            'worked_hours',
            'errors_count',
            'steps_done',
            'squats',
            'rising',
            'turn_left',
            'turn_right',
            'log_file',
            'document_file',
        ],
    ]) ?>

</div>
