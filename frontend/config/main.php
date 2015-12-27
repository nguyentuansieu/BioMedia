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
                    'pattern' => 'event/<slug:[\w\-]+>',
                    'route' => 'event-category/view',
                    'suffix' => ''
                ],
                [
                    'pattern' => 'event/<slug:[\w\-]+>',
                    'route' => 'event/view',
                    'suffix' => '.html'
                ],
                [
                    'pattern' => 'video/<slug:[\w\-]+>',
                    'route' => 'video-category/view',
                    'suffix' => ''
                ],
                [
                    'pattern' => 'video/<slug:[\w\-]+>',
                    'route' => 'video/view',
                    'suffix' => '.html'
                ],
                [
                    'pattern' => 'product/<slug:[\w\-]+>',
                    'route' => 'product-category/view',
                    'suffix' => ''
                ],
                [
                    'pattern' => 'product/<slug:[\w\-]+>',
                    'route' => 'product/view',
                    'suffix' => '.html'
                ],
                [
                    'pattern' => '<slug:[\w\-]+>',
                    'route' => 'post-category/view',
                    'suffix' => ''
                ],
                [
                    'pattern' => 'post/<slug:[\w\-]+>',
                    'route' => 'post/view',
                    'suffix' => '.html'
                ],
                [
                    'pattern' => '<slug:[\w\-]+>',
                    'route' => 'page/view',
                    'suffix' => '.html',
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
                '350x120' => [350, 120],
                '120x80' => [120, 80],
                '165x120' => [165, 120],
                '600x400' => [600, 400],
                '280x150' => [280, 150],
            ],
        ],
    ],
    'params' => $params,
];
