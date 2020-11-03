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
    $field = $form->field($model, 'f501', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?php
    echo Select2::widget([
        'model' => $model,
        'attribute' => 'f501',
        'hideSearch' => true,
        'data' => ['Sebelum Ujian Sidang' => 'Sebelum Ujian Sidang', 'Setelah Ujian Sidang' => 'Setelah Ujian Sidang'],
        'options' => ['placeholder' => 'Memperoleh Pekerjaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <?= $form->field($model, 'f502')->textInput(['autofocus' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'f6')->textInput(['autofocus' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'f701')->textInput(['autofocus' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'f702')->textInput(['autofocus' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'f8')->radioList( [ 1 => 'Ya (Jika ya, lanjutkan ke f11)', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f901')->radioList( [ 1 => 'Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f902')->radioList( [ 1 => 'Saya menikah', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f903')->radioList( [ 1 => 'Saya sibuk dengan keluarga dan anak-anak', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f904')->radioList( [ 1 => 'Saya sekarang sedang mencari pekerjaan', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f905')->radioList( [ 1 => 'lainnya', 2 => 'tidak memilih']); ?> 

    <?= $form->field($model, 'f906')->textInput(['maxlength' => true]) ?>

    <?php 
    $field = $form->field($model, 'f1001', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?php
    echo Select2::widget([
        'model' => $model,
        'attribute' => 'f1001',
        'hideSearch' => true,
        'data' => ['Tidak' => 'Tidak', 'Tidak saya sedang menunggu hasil lamaran kerja' => 'Tidak saya sedang menunggu hasil lamaran kerja', 'Ya saya akan mulai bekerja dalam dua minggu ke depan' => 'Ya saya akan mulai bekerja dalam dua minggu ke depan', 'Ya saya belum pasti akan bekerja dalam dua minggu ke depan' => 'Ya saya belum pasti akan bekerja dalam dua minggu ke depan', 'Lainnya' => 'Lainnya'],
        'options' => ['placeholder' => 'Pilih mulai pencarian pekerjaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <!-- <?= $form->field($model, 'f1001')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'f1002')->textInput(['maxlength' => true]) ?>

    <?php 
    $field = $form->field($model, 'f1101', ['options' => []]);
    $field->template = "{label}\n{error}";  
    echo $field->textInput(['maxlength' => 255]);
    ?>
    <?php
    echo Select2::widget([
        'model' => $model,
        'attribute' => 'f1101',
        'hideSearch' => true,
        'data' => ['Instansi pemerintah (termasuk BUMN)' => 'Instansi pemerintah (termasuk BUMN)','Organisasi non profit / Lembaga Swadaya Masyarakat' => 'Organisasi non profit / Lembaga Swadaya Masyarakat','Perusahaan Swasta' => 'Perusahaan Swasta','Wiraswasta / perusahaan sendiri' => 'Wiraswasta / perusahaan sendiri', 'Lainnya' => 'Lainnya' ],
        'options' => ['placeholder' => 'Pilih instansi bekerja'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <!-- <?= $form->field($model, 'f1101')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'f1102')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f1301')->textInput(['autofocus' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'f1302')->textInput(['autofocus' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'f1303')->textInput(['autofocus' => true, 'type' => 'number']) ?>

 

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
