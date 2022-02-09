<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */


/* @var $model app\models\SignupForm */


$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= \yii\helpers\Html::encode($this->title) ?></h1>
    <p>Заполните поля, чтобы зарегистрироваться</p>
    <div class="row justify-content-between">


        <div class="d-flex justify-content-center mx-auto w-100">
            <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'form-signup']); ?>

            <div class="row">
                <div class="col">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Имя пользователя') ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'email')->textInput(['type' => 'email'])->label('Email') ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'tel')->textInput(['maxlength'=>12])->label('Телефон') ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?= $form->field($model, 'name')->textInput()->label('Имя') ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'surname')->textInput()->label('Фамилия') ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'otchestvo')->textInput()->label('Отчетство') ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?= $form->field($model, 'addr_dostavki')->textarea()->label('Адрес доставки') ?>
                </div>
            </div>
            <div class="form-group">
                <?= \yii\helpers\Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
        </div>
        <?php \yii\widgets\ActiveForm::end(); ?>

    </div>
</div>