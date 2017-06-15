<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResourceDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resource-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rd_id') ?>

    <?= $form->field($model, 'rd_type') ?>

    <?= $form->field($model, 'rd_commonName') ?>

    <?= $form->field($model, 'rd_localName') ?>

    <?= $form->field($model, 'rd_scienceName') ?>

    <?php // echo $form->field($model, 'rd_familyName') ?>

    <?php // echo $form->field($model, 'rd_nature') ?>

    <?php // echo $form->field($model, 'rd_area') ?>

    <?php // echo $form->field($model, 'rd_benefit') ?>

    <?php // echo $form->field($model, 'rd_picture') ?>

    <?php // echo $form->field($model, 'rd_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
