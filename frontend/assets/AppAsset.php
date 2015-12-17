<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/revslider.css',
        'css/style.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/animate.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600',
        'css/site.css',
    ];
    public $js = [
        'js/common.js',
        'js/revslider.js',
        'js/owl.carousel.min.js',
        'js/parallax.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'sieulog\adminlte\FontAwesomeAssets',
        'sieulog\adminlte\IoniconAssets',
    ];
}
