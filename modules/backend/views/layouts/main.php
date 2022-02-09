<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Заказы', 'url' => ['/backend/zakaz']],
            ['label' => 'Корзина', 'url' => ['/backend/spisokbookszakaza']],
            [

                'label' => 'Список таблиц',
                'items' => [
                    ['label' => 'Авторство', 'url' => ['/backend/authorstvo']],
                    ['label' => 'Автор', 'url' => ['/backend/author']],
                    ['label' => 'Жанры книг', 'url' => ['/backend/bookgenres']],
                    ['label' => 'Книги', 'url' => ['/backend/books']],
                    ['label' => 'Форматы книг', 'url' => ['/backend/format']],
                    ['label' => 'Жанры', 'url' => ['/backend/genres']],
                    ['label' => 'Города отделений', 'url' => ['/backend/gorodaotdeleniy']],
                    ['label' => 'Издательства', 'url' => ['/backend/izdatelstva']],
                    ['label' => 'Языки', 'url' => ['/backend/languages']],
                    ['label' => 'Наличие книг', 'url' => ['/backend/nalichieknig']],
                    ['label' => 'Отделения', 'url' => ['/backend/otdel']],
                    ['label' => 'Переплет', 'url' => ['/backend/pereplet']],
                    ['label' => 'Самовывоз', 'url' => ['/backend/samovivoz']],
                    ['label' => 'Способ оплаты', 'url' => ['/backend/sposoboplati']],
                    ['label' => 'Спосок получения', 'url' => ['/backend/sposobpolucheniya']],
                    ['label' => 'Статус заказа', 'url' => ['/backend/statuszakaza']],
                    ['label' => 'Издательства', 'url' => ['/backend/izdatelstva']],
                    ['label' => 'Пользователи', 'url' => ['/backend/user']],
                ],
            ],


            Yii::$app->user->isGuest ? (
            ['label' => 'Авторизоваться', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
        ],

    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
