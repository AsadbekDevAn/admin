<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap4\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\XonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xonas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xona-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Xona qoshish', ['create'], ['class' => 'btn btn-success',
        'id'=>'xona',
        ]) ?>
    </p>
    <?php
    Modal::begin([
        'title'=>'Xona qoshish',
        'id'=>'modal'
    ]);
    ?>
    <div id='blok'></div>
    <?
     Modal::end();
    ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'xnomi',
            'sigim',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
