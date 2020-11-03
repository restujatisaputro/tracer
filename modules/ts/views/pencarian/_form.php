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
    $field = $form->field($model, 'f301', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?php
    echo Select2::widget([
        'model' => $model,
        'attribute' => 'f301',
        'hideSearch' => true,
        'data' => ['Sebelum Lulus' => 'Sebelum Lulus', 'Sesudah Lulus' => 'Sesudah Lulus', 'Tidak Mencari' => 'Tidak Mencari'],
        'options' => ['placeholder' => 'Pilih mulai pencarian pekerjaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <!-- <?= $form->field($model, 'f301')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'f302')->textInput(['autofocus' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'f401')->radioList( [ 1 => 'Melalui iklan di koran/majalah, brosur', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f402')->radioList( [ 1 => 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f403')->radioList( [ 1 => 'Pergi ke bursa/pameran kerja', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f404')->radioList( [ 1 => 'Mencari lewat internet/iklan online/milis', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f405')->radioList( [ 1 => 'Dihubungi oleh perusahaan', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f406')->radioList( [ 1 => 'Menghubungi Kemenakertrans', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f407')->radioList( [ 1 => 'Menghubungi agen tenaga kerja komersial/swasta', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f408')->radioList( [ 1 => 'Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f409')->radioList( [ 1 => 'Menghubungi kantor kemahasiswaan/hubungan alumni', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f410')->radioList( [ 1 => 'Membangun jejaring (network) sejak masih kuliah', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f411')->radioList( [ 1 => 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f412')->radioList( [ 1 => 'Membangun bisnis sendiri', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f413')->radioList( [ 1 => 'Melalui penempatan kerja atau magang', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f414')->radioList( [ 1 => 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah', 2 => 'tidak memilih']); ?>

    <?= $form->field($model, 'f415')->radioList( [ 1 => 'lainnya', 2 => 'tidak memilih']); ?>

    <!-- <?= $form->field($model, 'f401')->label(false)->radioList( [ 1 => 'Melalui iklan di koran/majalah, brosur', 2 => 'tidak memilih']); ?>  -->



 

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
