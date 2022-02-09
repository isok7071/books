<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
$dataProvider = new ActiveDataProvider([
    'query' => \app\modules\common\models\UserSearch::find()->orderBy('name'),
    'pagination' => [
        'pageSize' => 2 ,
    ],

]);

$this->title = 'Пажилой Димас';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">

        <h1 class="display-4">Пажилой Димас</h1>
        <p class="lead">Закажи Димаса прямо сейчас</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Заказать!</a></p>

    </div>

    <div class="body-content">
        <div class="text-center">
            <?php echo ListView::widget([

                'dataProvider' => $dataProvider,
                'itemView'=>'_list',

                'viewParams' => [
                    'fullView' => true,
                    'context' => 'main-page',
                    // ...
                ],
            ]);

            ?>

        </div>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col text-center">
                <h2>О димасе</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-danger" href="http://www.yiiframework.com/doc/">Димас Documentation &raquo;</a></p>
            </div>

        </div>

    </div>
</div>

