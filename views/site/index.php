<?php ob_start(); ?>

### Links

* [Yii-Framework-Homepage](http://www.yiiframework.com)
* [Definitive Guide 2.0](http://www.yiiframework.com/doc-2.0/index.html)
* [Project-Homepage](https://github.com/mbischof/yii2-app-hyde)

<?php $content = ob_get_clean(); ?>

<div class="post">
    <h1 class="post-title">Welcome To My World!</h1>
    <span class="post-date"><?= date('Y-m-d'); ?></span>
    <?php echo \yii\helpers\Markdown::process($content, 'gfm'); ?>
</div>
