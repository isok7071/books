<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\common\models\GenresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genres-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Genres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
