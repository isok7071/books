<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\common\models\Books;
use app\modules\common\models\Otdel;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Nalichieknig */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nalichieknig-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_otdel')->dropDownList(ArrayHelper::map(Otdel::find()->all(), 'id', 'addres')) ?>

    <?= $form->field($model, 'id_book')->dropDownList(ArrayHelper::map(Books::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'kolichestvo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
