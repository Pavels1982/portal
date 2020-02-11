<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Exoskeleton */

$this->title = 'Update Exoskeleton: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Exoskeletons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exoskeleton-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
