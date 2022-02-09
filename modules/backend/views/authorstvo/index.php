<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\common\models\AuthorstvoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authorstvos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authorstvo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Authorstvo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                    'attribute'=>'id_author',
                    'value'=>'author.name',
            ],
            [
                    'attribute'=>'id_book',
                    'value'=>'book.name',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>