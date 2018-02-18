<?php

return [
    'id' => 'home-app',
    'name' => 'Yii2',
    'basePath' => __DIR__,
    'components' => [
        'request' => [
            'cookieValidationKey' => '',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]
    ]
];