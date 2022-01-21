<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZakazSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakaz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tnomi_id') ?>

    <?= $form->field($model, 'soni') ?>

    <?= $form->field($model, 'narx') ?>

    <?= $form->field($model, 'xona_id') ?>

    <?php // echo $form->field($model, 'umumiy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
