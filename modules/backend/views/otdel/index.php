<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\common\models\OtdelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Otdels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otdel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Otdel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_otdeleniya',
            'addres',
            [
                    'attribute'=>'id_gorod',
                    'value'=>'gorod.gorod_name',
            ],
            'tel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
