<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */

$this->title = 'Profil Alumni';
// $this->params['breadcrumbs'][] = ['label' => 'Tracer Study'];
// $this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->nim]];
// $this->params['breadcrumbs'][] = 'Isi / Perbaharui';
?>
<div class="ts-update">

<!--     <h1>Profil Alumni</h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
