<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap4\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BuyurtmaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buyurtmas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buyurtma-index">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <div class='row'>
        <div class='col-md-8'>
            <p>
                <?= Html::a('Buyurtma', ['create'], ['class' => 'btn btn-success',
                'id'=>'buyurtma',
                 ]) ?>
            </p>
        </div> 
        <div class='col-md-4'>
               <p><i class='btn btn-danger'></i>-Buyurtma yakunlangan.</p>
               <p><i class='btn btn-info'></i>-Buyurtma active holda.</p>
         </div> 
    </div>
   <?
     Modal::begin([
         'title'=>'Buyurtma',
         'id'=>'modal',
     ])
   ?>
   <div id='blok'></div>
   <?
     Modal::end();
   ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,    
        'rowOptions'=>function($d)
        {
           if($d->active=="1")
           return ['class'=>'table table-danger'];
           else
           return ['class'=>'table table-info'];
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ism',
            'tel',
            'kun',
            'xona_id',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{update} {delete} {aktiv}',
            'buttons'=>[
                'aktiv' => function ($url, $model, $key) {
                    return Html::a("<i class='btn btn-danger'>", $url);
                },
            ],
             ],
        ],
    ]); ?>
    
  
</div>
