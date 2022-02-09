<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Nalichieknig */

$this->title = 'Create Nalichieknig';
$this->params['breadcrumbs'][] = ['label' => 'Nalichieknigs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nalichieknig-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
