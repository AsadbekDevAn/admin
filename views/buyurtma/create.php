<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Buyurtma */

// $this->title = 'Create Buyurtma';
$this->params['breadcrumbs'][] = ['label' => 'Buyurtmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buyurtma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
