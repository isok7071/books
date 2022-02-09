<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="">
    <p class="">
        <?= Html::encode($model->name) ?>
         <?= HtmlPurifier::process($model->surname) ?>
    </p>

</div>