<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Authorstvo */

$this->title = 'Create Authorstvo';
$this->params['breadcrumbs'][] = ['label' => 'Authorstvos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authorstvo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
