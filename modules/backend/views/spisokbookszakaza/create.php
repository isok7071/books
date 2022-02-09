<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Spisokbookszakaza */

$this->title = 'Create Spisokbookszakaza';
$this->params['breadcrumbs'][] = ['label' => 'Spisokbookszakazas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spisokbookszakaza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
