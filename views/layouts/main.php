<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php \app\components\Asset::register($this); ?>

<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <title><?= Html::encode($this->title) ?></title>
        <?= Html::csrfMetaTags() ?>

        <?php $this->head() ?>

        <?php $this->registerMetaTag([
            'charset' => Yii::$app->charset,
        ]) ?>

        <?php $this->registerMetaTag([
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1',
        ]) ?>

        <?php $this->registerLinkTag([
            'rel' => 'canonical',
            'href' => Url::canonical(),
        ]) ?>

    </head>

    <body>
        <?php $this->beginBody() ?>

        <div class="sidebar">
            <div class="container sidebar-sticky">
                <div class="sidebar-about">
                    <h1><?= Html::a(Yii::$app->name, ['/']) ?></h1>
                    <p class="lead">Your Name<br />Your Slogan</p>
                </div>

                <nav class="sidebar-nav">
                    <?= Html::a('Start', ['/'], ['class' => 'sidebar-nav-item']) ?>
                </nav>

                <p>&copy; <?php echo date('Y'); ?>. All rights reserved.</p>
            </div>
        </div>

        <div class="content container">
            <?= $content ?>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>

<?php $this->endPage() ?>
