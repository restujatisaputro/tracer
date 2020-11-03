<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */

$this->title = "Pencarian Pekerjaan";
// $this->params['breadcrumbs'][] = ['label' => 'Ts', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ts-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Isi / Perbaharui', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->nim], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'f301',
            'f302',
            'f401',
            'f402',
            'f403',
            'f404',
            'f405',
            'f406',
            'f407',
            'f408',
            'f409',
            'f410',
            'f411',
            'f412',
            'f413',
            'f414',
            'f415',
        ],
    ]) ?>

</div>
