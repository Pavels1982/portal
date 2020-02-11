<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Exoskeleton */

$this->title = 'Create Exoskeleton';
$this->params['breadcrumbs'][] = ['label' => 'Exoskeletons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exoskeleton-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
