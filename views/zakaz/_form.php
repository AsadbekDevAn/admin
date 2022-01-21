<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Zakaz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakaz-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'b_id')->dropDownList(ArrayHelper::map(\app\models\Buyurtma::find()->all(),'id','id'),['prompt'=>'Buyurtmani tanlang...',])?>

    <?= $form->field($model, 'tnomi_id')->dropDownList(ArrayHelper::map(\app\models\Menu::find()->all(),'id','tnomi'),['prompt'=>'Taomni tanlang...','id'=>'taom']) ?>

    <?= $form->field($model, 'soni')->textInput(['id'=>'son']) ?>

    <?= $form->field($model, 'narx')->textInput(['id'=>'narx']) ?>

    <?= $form->field($model, 'xona_id')->dropDownList(ArrayHelper::map(\app\models\Xona::find()->all(),'id','xnomi',),['prompt'=>'Xonani tanlang...']) ?>

    <?= $form->field($model, 'umumiy')->textInput(['id'=>'summa']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
