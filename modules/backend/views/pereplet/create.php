<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Pereplet */

$this->title = 'Create Pereplet';
$this->params['breadcrumbs'][] = ['label' => 'Pereplets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pereplet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
