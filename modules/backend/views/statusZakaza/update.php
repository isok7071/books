<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Statuszakaza */

$this->title = 'Update Statuszakaza: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Statuszakazas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statuszakaza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
