<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

$url = \yii\helpers\Url::to(['prodilist']);
 

use yii\web\JsExpression;
use app\modules\ts\models\Prodi;
 

?>

<div class="ts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['autofocus' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'masuk')->textInput() ?>

    <?= $form->field($model, 'lulus')->textInput() ?>

    <?= $form->field($model, 'hp')->textInput() ?>

    <!-- <?= $form->field($model, 'prodi')->textInput(['maxlength' => true]) ?> -->


<?php
$prodiDesc = empty($model->prodi) ? '' : Prodi::findOne($model->prodi)->prodi_p;
?> 


<?= $form->field($model, 'prodi')->widget(Select2::classname(), [
    'options' => ['multiple'=>false, 'placeholder' => 'Search for a prodi ...'],
    'pluginOptions' => [
        'allowClear' => true,
        'minimumInputLength' => 3,
        'language' => [
            'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
        ],
        'ajax' => [
            'url' => $url,
            'dataType' => 'json',
            'data' => new JsExpression('function(params) { return {q:params.term}; }')
        ],
        'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
        'templateResult' => new JsExpression('function(prodi) { return prodi.text; }'),
        'templateSelection' => new JsExpression('function (prodi) { return prodi.text; }'),
    ],
]);

?>



    
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
