<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\common\models\Languages;
use app\modules\common\models\Format;
use app\modules\common\models\Izdatelstva;
use app\modules\common\models\Pereplet;

/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-6">
            <?= $form->field($model, 'oblojka')->fileInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'parent_book_id')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'id_lang')->dropDownList(ArrayHelper::map(Languages::find()->all(), 'id', 'name')) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'id_izd')->dropDownList(ArrayHelper::map(Izdatelstva::find()->all(), 'id', 'name')) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'id_format')->dropDownList(ArrayHelper::map(Format::find()->all(), 'id', 'name')) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'kolvoStr')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'price')->textInput() ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'ISBN13')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'id_pereplet')->dropDownList(ArrayHelper::map(Pereplet::find()->all(), 'id', 'name')) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'god_izdaniya')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
