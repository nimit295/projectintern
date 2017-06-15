<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ResourceData */

$this->title = 'Create Resource Data';
$this->params['breadcrumbs'][] = ['label' => 'Resource Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resource-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
