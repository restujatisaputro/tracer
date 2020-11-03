<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\slider\Slider;

/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ts-form">

    <?php $form = ActiveForm::begin(); ?>

<!--     <?= $form->field($model, 'f201')->textInput() ?>
    <?= $form->field($model, 'f201')->radioList( [0=>'zero', 1 => 'one', 2 => 'two'], ['unselect' => null] ); ?> -->


    <?php 
    $field = $form->field($model, 'f201', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?= '<i>Nilai semakin kecil berarti tidak sama sekali memberikan penekanan dan semakin besar berarti sangat besar memberikan penekanan</i>'?>
    <?php echo $form->field($model, 'f201')->widget(Slider::classname(), [
        'pluginOptions'=>[
            'min'=>0,
            'max'=>5,
            'step'=>1
        ], 'class'=> 'col-6'
    ])->label('',['class'=>'label-class']) ?>

    <?php 
    $field = $form->field($model, 'f202', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?= '<i>Nilai semakin kecil berarti tidak sama sekali memberikan penekanan dan semakin besar berarti sangat besar memberikan penekanan</i>'?>
    <?php echo $form->field($model, 'f202')->widget(Slider::classname(), [
        'pluginOptions'=>[
            'min'=>0,
            'max'=>5,
            'step'=>1
        ], 'class'=> 'col-6'
    ])->label('',['class'=>'label-class']) ?>

    <?php 
    $field = $form->field($model, 'f203', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?= '<i>Nilai semakin kecil berarti tidak sama sekali memberikan penekanan dan semakin besar berarti sangat besar memberikan penekanan</i>'?>
    <?php echo $form->field($model, 'f203')->widget(Slider::classname(), [
        'pluginOptions'=>[
            'min'=>0,
            'max'=>5,
            'step'=>1
        ], 'class'=> 'col-6'
    ])->label('',['class'=>'label-class']) ?>

    <?php 
    $field = $form->field($model, 'f204', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?= '<i>Nilai semakin kecil berarti tidak sama sekali memberikan penekanan dan semakin besar berarti sangat besar memberikan penekanan</i>'?>
    <?php echo $form->field($model, 'f204')->widget(Slider::classname(), [
        'pluginOptions'=>[
            'min'=>0,
            'max'=>5,
            'step'=>1
        ], 'class'=> 'col-6'
    ])->label('',['class'=>'label-class']) ?>

    <?php 
    $field = $form->field($model, 'f205', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?= '<i>Nilai semakin kecil berarti tidak sama sekali memberikan penekanan dan semakin besar berarti sangat besar memberikan penekanan</i>'?>
    <?php echo $form->field($model, 'f205')->widget(Slider::classname(), [
        'pluginOptions'=>[
            'min'=>0,
            'max'=>5,
            'step'=>1
        ], 'class'=> 'col-6'
    ])->label('',['class'=>'label-class']) ?>

    <?php 
    $field = $form->field($model, 'f206', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?= '<i>Nilai semakin kecil berarti tidak sama sekali memberikan penekanan dan semakin besar berarti sangat besar memberikan penekanan</i>'?>
    <?php echo $form->field($model, 'f206')->widget(Slider::classname(), [
        'pluginOptions'=>[
            'min'=>0,
            'max'=>5,
            'step'=>1
        ], 'class'=> 'col-6'
    ])->label('',['class'=>'label-class']) ?>

    <?php 
    $field = $form->field($model, 'f207', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?= '<i>Nilai semakin kecil berarti tidak sama sekali memberikan penekanan dan semakin besar berarti sangat besar memberikan penekanan</i>'?>
    <?php echo $form->field($model, 'f207')->widget(Slider::classname(), [
        'pluginOptions'=>[
            'min'=>0,
            'max'=>5,
            'step'=>1
        ], 'class'=> 'col-6'
    ])->label('',['class'=>'label-class']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
