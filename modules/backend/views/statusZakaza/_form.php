<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Statuszakaza */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statuszakaza-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
