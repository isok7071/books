<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\common\models\Author;
use app\modules\common\models\Books;
/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Authorstvo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="authorstvo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_author')->dropDownList(ArrayHelper::map(Author::find()->all(), 'id', 'name', 'surname'))  ?>

    <?= $form->field($model, 'id_book')->dropDownList(ArrayHelper::map(Books::find()->all(), 'id', 'name'))  ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
