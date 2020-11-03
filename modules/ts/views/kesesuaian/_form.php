<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
    $field = $form->field($model, 'f14', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?php
    echo Select2::widget([
        'model' => $model,
        'attribute' => 'f14',
        'hideSearch' => true,
        'data' => ['Sangat Erat' => 'Sangat Erat','Erat' => 'Erat','Cukup Erat' => 'Cukup Erat','Kurang Erat' => 'Kurang Erat','Tidak sama sekali' => 'Tidak sama sekali'],
        'options' => ['placeholder' => 'Hubungan dengan pekerjaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <?php 
    $field = $form->field($model, 'f15', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?php
    echo Select2::widget([
        'model' => $model,
        'attribute' => 'f15',
        'hideSearch' => true,
        'data' => ['Setingkat Lebih Tinggi' => 'Setingkat Lebih Tinggi', 'Tingkat yang sama' => 'Tingkat yang sama', 'Setingkat Lebih Rendah' => 'Setingkat Lebih Rendah', 'Tidak perlu pendidikan tinggi' => 'Tidak perlu pendidikan tinggi'],
        'options' => ['placeholder' => 'Tingkat Pendidikan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <?= $form->field($model, 'f1601')->radioList( [ 1 => 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1602')->radioList( [ 1 => 'Saya belum mendapatkan pekerjaan yang lebih sesuai', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1603')->radioList( [ 1 => 'Di pekerjaan ini saya memeroleh prospek karir yang baik', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1604')->radioList( [ 1 => 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1605')->radioList( [ 1 => 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1606')->radioList( [ 1 => 'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1607')->radioList( [ 1 => 'Pekerjaan saya saat ini lebih aman/terjamin/secure', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1608')->radioList( [ 1 => 'Pekerjaan saya saat ini lebih menarik', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1609')->radioList( [ 1 => 'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1610')->radioList( [ 1 => 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1611')->radioList( [ 1 => 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1612')->radioList( [ 1 => 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1613')->radioList( [ 1 => 'Lainnya', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f1614')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
