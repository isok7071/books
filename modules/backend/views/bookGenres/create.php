<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Bookgenres */

$this->title = 'Create Bookgenres';
$this->params['breadcrumbs'][] = ['label' => 'Bookgenres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookgenres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
