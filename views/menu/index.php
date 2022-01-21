<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap4\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Menu', ['create'], ['class' => 'btn btn-success',
        'id'=>'menu',
        ]) ?>
    </p>
    <?
      Modal::begin([
        'title'=>'Menu',  
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
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tnomi',
            [
              'attribute'=>'narx',
              'value'=>function($d)
              {
                 return  number_format($d->narx,'2','.',' ');
              }
            ],

            ['class' => 'yii\grid\ActionColumn',
             'template'=>'{update} {delete}',
          ],
        ],
    ]); ?>


</div>
