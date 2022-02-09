<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\common\models\Books;
use app\modules\common\models\Genres;

/* @var $model app\modules\common\models\Genres */
/* @var $model app\modules\common\models\Books */
/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Bookgenres */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bookgenres-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_genre')->dropDownList(ArrayHelper::map(Genres::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'id_book')->dropDownList(ArrayHelper::map(Books::find()->all(), 'id', 'name')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
