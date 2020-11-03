<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */

$this->title = 'Pengisian Profil';
$this->params['breadcrumbs'][] = ['label' => 'Profil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
