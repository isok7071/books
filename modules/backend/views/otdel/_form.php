<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\common\models\Gorodaotdeleniy;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Otdel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otdel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_otdeleniya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_gorod')->dropDownList(ArrayHelper::map(Gorodaotdeleniy::find()->all(), 'id', 'gorod_name')) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
