<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\common\models\NalichieknigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nalichieknigs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nalichieknig-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nalichieknig', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                    'attribute'=>'id_otdel',
                    'value'=>'otdel.addres',
            ],
            [
                'attribute'=>'id_book',
                'value'=>'book.name',
            ],
            'kolichestvo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
