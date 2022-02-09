<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\common\models\SamovivozSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Samovivozs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="samovivoz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Samovivoz', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
