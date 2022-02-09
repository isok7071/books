<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Statuszakaza */

$this->title = 'Create Statuszakaza';
$this->params['breadcrumbs'][] = ['label' => 'Statuszakazas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statuszakaza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
