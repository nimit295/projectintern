<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResourceData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resource-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rd_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rd_commonName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rd_localName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rd_scienceName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rd_familyName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rd_nature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rd_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rd_benefit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rd_picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rd_other')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
