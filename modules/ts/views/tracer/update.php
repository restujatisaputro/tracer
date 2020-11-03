<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */

$this->title = 'Update Ts: ' . $model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nim, 'url' => ['view', 'id' => $model->nim]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
