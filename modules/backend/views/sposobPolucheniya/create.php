<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Sposobpolucheniya */

$this->title = 'Create Sposobpolucheniya';
$this->params['breadcrumbs'][] = ['label' => 'Sposobpolucheniyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sposobpolucheniya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
