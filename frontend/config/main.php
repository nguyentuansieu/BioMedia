<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'homeUrl' => '/',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'baseUrl' => '',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'thumbs/<path:.*>' => 'site/thumb',
                [
                    'pattern' => '<slug:[\w\-]+>',
                    'route' => 'page/view',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => 'review/<slug:[\w\-]+>',
                    'route' => 'review-category/view',
                    'suffix' => ''
                ],
                [
                    'pattern' => 'review/<slug:[\w\-]+>',
                    'route' => 'review/view',
                    'suffix' => '.html'
                ],
                [
                    'pattern' => '<cslug:[\w\-]+>/<pslug:[\w\-]+>',
                    'route' => 'post/view',
                    'suffix' => '.html'
                ],
            ],
        ],
        'imageCache' => [
            'class' => 'iutbay\yii2imagecache\ImageCache',
            'sourcePath' => '@app/web/uploads',
            'sourceUrl' => '@web/uploads',
            'thumbsPath' => '@app/web/thumbs',
            'thumbsUrl' => '@web/thumbs',
            'sizes' => [
                'post' => [280, 140],
                'review' => [265, 165],
                'videoHot' => [285, 155],
                'videoHotChild' => [120, 80],
            ],
        ],
    ],
    'params' => $params,
];
