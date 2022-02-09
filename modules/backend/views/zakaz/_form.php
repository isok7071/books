<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\common\models\Spisokbookszakaza;
use app\modules\common\models\User;
use app\modules\common\models\Sposoboplati;
use app\modules\common\models\Sposobpolucheniya;
use app\modules\common\models\Statuszakaza;
/* @var $this yii\web\View */
/* @var $model app\modules\common\models\Zakaz */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<div class="row justify-content-center">
    <div class="col-6">
        <?= $form->field($model, 'id_user')->textInput() ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'id_spisok_books')->dropDownList(ArrayHelper::map(Spisokbookszakaza::find()->all(), 'id', 'id_book')) ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'adress_dostavki')->dropDownList(ArrayHelper::map(User::find()->all(), 'id', 'addr_dostavki')) ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'id_samovivoza')->textInput() ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'data_zakaza')->textInput(['type' => 'datetime-local']) ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'data_predpolag_dostavki')->textInput(['type' => 'datetime-local']) ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'id_sposob_polucheniya')->dropDownList(ArrayHelper::map(Sposobpolucheniya::find()->all(), 'id', 'name')) ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'id_sposob_oplati')->dropDownList(ArrayHelper::map(Sposoboplati::find()->all(), 'id', 'name')) ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'price')->textInput() ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'id_status')->dropDownList(ArrayHelper::map(Statuszakaza::find()->all(), 'id', 'status_name')) ?>
    </div>
    <div class="col">
        <div class="form-group">
            <?= Html::submitButton('Схоронить', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>

</div>
