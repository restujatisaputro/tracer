<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'saran01')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran02')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran03')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran04')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran05')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran06')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran07')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran08')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran09')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
