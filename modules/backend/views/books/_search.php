<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\BooksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'oblojka') ?>

    <?= $form->field($model, 'parent_book_id') ?>

    <?= $form->field($model, 'id_lang') ?>

    <?php // echo $form->field($model, 'id_izd') ?>

    <?php // echo $form->field($model, 'id_format') ?>

    <?php // echo $form->field($model, 'kolvoStr') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'ISBN13') ?>

    <?php // echo $form->field($model, 'id_pereplet') ?>

    <?php // echo $form->field($model, 'god_izdaniya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
