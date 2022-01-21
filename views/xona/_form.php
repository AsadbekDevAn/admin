<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Xona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="xona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'xnomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sigim')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
