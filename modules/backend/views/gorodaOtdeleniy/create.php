<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\GorodaOtdeleniy */

$this->title = 'Create Goroda Otdeleniy';
$this->params['breadcrumbs'][] = ['label' => 'Goroda Otdeleniys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goroda-otdeleniy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
