<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Samovivoz */

$this->title = 'Create Samovivoz';
$this->params['breadcrumbs'][] = ['label' => 'Samovivozs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="samovivoz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
