<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */

$this->title = 'Kompetensi Lulusan';
// $this->params['breadcrumbs'][] = ['label' => 'Ts', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ts-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Isi / Perbaharui', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
<!--         <?= Html::a('Delete', ['delete', 'id' => $model->nim], [
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
            'f17a01',
            'f17a02',
            'f17a03',
            'f17a04',
            'f17a05',
            'f17a06',
            'f17a07',
            'f17a08',
            'f17a09',
            'f17a10',
            'f17a11',
            'f17a12',
            'f17a13',
            'f17a14',
            'f17a15',
            'f17a16',
            'f17a17',
            'f17a18',
            'f17a19',
            'f17a20',
            'f17a21',
            'f17a22',
            'f17a23',
            'f17a24',
            'f17a25',
            'f17a26',
            'f17a27',
            'f17a28',
            'f17a29',
            'f17b10',
            'f17b01',
            'f17b02',
            'f17b03',
            'f17b04',
            'f17b05',
            'f17b06',
            'f17b07',
            'f17b08',
            'f17b09',
            'f17b11',
            'f17b12',
            'f17b13',
            'f17b14',
            'f17b15',
            'f17b16',
            'f17b17',
            'f17b18',
            'f17b19',
            'f17b20',
            'f17b21',
            'f17b22',
            'f17b23',
            'f17b24',
            'f17b25',
            'f17b26',
            'f17b27',
            'f17b28',
            'f17b29',

        ],
    ]) ?>

</div>
