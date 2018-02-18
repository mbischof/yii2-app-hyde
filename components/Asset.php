<?php

namespace app\components;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/poole.css',
        'css/syntax.css',
        'css/hyde.css',
        '//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700|Abril+Fatface',
    ];

    public $js = [];

    public $depends = [];
}
