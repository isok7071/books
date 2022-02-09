<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\common\models\IzdatelstvaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izdatelstvas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izdatelstva-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Izdatelstva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'fiz_addr',
            'uridich_addr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
