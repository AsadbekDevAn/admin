<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Buyurtma */

$this->title = 'Update Buyurtma: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Buyurtmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="buyurtma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
