<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */

$this->title = 'Kesesuaian Pekerjaan';
// $this->params['breadcrumbs'][] = ['label' => 'Ts', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ts-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Isi / Perbaharui', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
<!--         <?= Html::a('Delete', ['hapus', 'id' => $model->nim], [
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
            'f14',
            'f15',
            'f1601',
            'f1602',
            'f1603',
            'f1604',
            'f1605',
            'f1606',
            'f1607',
            'f1608',
            'f1609',
            'f1610',
            'f1611',
            'f1612',
            'f1613',
            'f1614',
      
        ],
    ]) ?>

</div>
