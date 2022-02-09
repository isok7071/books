<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Izdatelstva */

$this->title = 'Create Izdatelstva';
$this->params['breadcrumbs'][] = ['label' => 'Izdatelstvas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izdatelstva-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
