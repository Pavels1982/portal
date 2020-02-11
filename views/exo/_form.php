<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Exoskeleton */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exoskeleton-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ssid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'rising')->textInput() ?>

    <?= $form->field($model, 'squats')->textInput() ?>

    <?= $form->field($model, 'turn_left')->textInput() ?>

    <?= $form->field($model, 'turn_right')->textInput() ?>

    <?= $form->field($model, 'errors_count')->textInput() ?>

    <?= $form->field($model, 'worked_hours')->textInput() ?>

    <?= $form->field($model, 'steps_done')->textInput() ?>

    <?= $form->field($model, 'log_file')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
