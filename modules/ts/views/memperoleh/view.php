<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\ts\models\Ts */

$this->title = "Memperoleh Pekerjaan";
// $this->params['breadcrumbs'][] = ['label' => 'Ts', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ts-view">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Isi / Perbaharui', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
       <!--  <?= Html::a('Delete', ['delete', 'id' => $model->nim], [
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
            'f501',
            'f502',
            'f6',
            'f701',
            'f702',
            'f8',
            'f901',
            'f902',
            'f903',
            'f904',
            'f905',
            'f906',
            'f1001',
            'f1002',
            'f1101',
            'f1102',
            'f1301',
            'f1302',
            'f1303',
        ],
    ]) ?>

</div>
