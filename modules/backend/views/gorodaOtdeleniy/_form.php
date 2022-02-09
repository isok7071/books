<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\GorodaOtdeleniy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goroda-otdeleniy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gorod_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
