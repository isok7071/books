<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\ZakazSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakaz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'id_spisok_books') ?>

    <?= $form->field($model, 'adress_dostavki') ?>

    <?= $form->field($model, 'id_samovivoza') ?>

    <?php // echo $form->field($model, 'data_zakaza') ?>

    <?php // echo $form->field($model, 'data_predpolag_dostavki') ?>

    <?php // echo $form->field($model, 'id_sposob_polucheniya') ?>

    <?php // echo $form->field($model, 'id_sposob_oplati') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'id_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
