<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\common\models\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Books', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'oblojka',
            'parent_book_id',
            [
                'attribute' => 'id_lang',
                'value' => 'lang.name',
            ],
            [
                'attribute' => 'id_izd',
                'value' => 'izd.name',
            ],
            [
                'attribute' => 'id_format',
                'value' => 'format.name'
            ],
            //'kolvoStr',
            //'price',
            //'ISBN13',
            [
                'attribute' => 'id_pereplet',
                'value' => 'pereplet.name'
            ],

            //'god_izdaniya',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
