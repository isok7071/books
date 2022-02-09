<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\common\models\GorodaotdeleniySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Goroda Otdeleniys';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goroda-otdeleniy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Goroda Otdeleniy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gorod_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
