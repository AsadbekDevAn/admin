<?php

use yii\helpers\Html;
use yii\grid\GridView;
    

/* @var $this yii\web\View */
/* @var $searchModel app\models\ZakazSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zakazs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakaz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Zakaz qilish', ['create'], ['class' => 'btn btn-success',
        'id' => 'zakaz',
        ]) ?>
    </p>

 

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'B_ID',
                'value'=>function($d)
                {
                    return $d->buyurtma->ism;
                }
            ],
            'id',
            [
                'attribute'=>'tnomi_id',
                'value'=>function($d)
                {
                    return $d->tnomi->tnomi;
                }
            ],
            'soni',
            'narx',
             ['class' => 'yii\grid\ActionColumn',
             'template'=>'{update} {delete}'
              
           ],
        ],
    ]); 
    ?>


</div>
