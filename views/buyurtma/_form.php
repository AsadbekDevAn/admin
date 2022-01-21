<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Buyurtma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buyurtma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ism')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kun')?>

    <?= $form->field($model, 'xona_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Xona::find()->all(),'id','xnomi'),['prompt'=>'Xonani tanlang.']) ?>

    <?= $form->field($model, 'active')->textInput() ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
