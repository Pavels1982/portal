<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Exoskeleton */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exoskeleton-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'serial_number')->textInput() ?>

    <?= $form->field($model, 'sale_date')->textInput() ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ssid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worked_hours')->textInput() ?>

    <?= $form->field($model, 'errors_count')->textInput() ?>

    <?= $form->field($model, 'steps_done')->textInput() ?>

    <?= $form->field($model, 'squats')->textInput() ?>

    <?= $form->field($model, 'rising')->textInput() ?>

    <?= $form->field($model, 'turn_left')->textInput() ?>

    <?= $form->field($model, 'turn_right')->textInput() ?>

    <?= $form->field($model, 'log_file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'document_file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
