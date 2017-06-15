<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResourceData */

$this->title = 'Update Resource Data: ' . $model->rd_id;
$this->params['breadcrumbs'][] = ['label' => 'Resource Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rd_id, 'url' => ['view', 'id' => $model->rd_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resource-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
