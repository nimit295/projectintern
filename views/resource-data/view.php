<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ResourceData */

$this->title = $model->rd_id;
$this->params['breadcrumbs'][] = ['label' => 'Resource Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resource-data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rd_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rd_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'rd_id',
            'rd_type',
            'rd_commonName',
            'rd_localName',
            'rd_scienceName',
            'rd_familyName',
            'rd_nature',
            'rd_area',
            'rd_benefit',
            'rd_picture',
            'rd_other',
        ],
    ]) ?>

</div>
