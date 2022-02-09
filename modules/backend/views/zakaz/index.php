<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\common\models\ZakazSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zakazs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakaz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Zakaz', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'id_spisok_books',
            [
                    'attribute'=>'adress_dostavki',
                    'value'=>'user.addr_dostavki',
            ],
            [
                    'attribute'=>'id_samovivoza',
                    'value'=>'samovivoza.address'
            ],
            //'data_zakaza',
            //'data_predpolag_dostavki',
            [
                'attribute'=>'id_sposob_polucheniya',
                'value'=>'sposobPolucheniya.name',
            ],
            [
                'attribute'=>'id_sposob_oplati',
                'value'=>'sposobOplati.name'
            ],
            //'price',
            [
                    'attribute'=>'id_status',
                    'value'=>'status.status_name'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
