<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ResourceDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resource Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resource-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Resource Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rd_id',
            'rd_type',
            'rd_commonName',
            'rd_localName',
            'rd_scienceName',
            // 'rd_familyName',
            // 'rd_nature',
            // 'rd_area',
            // 'rd_benefit',
            // 'rd_picture',
            // 'rd_other',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
