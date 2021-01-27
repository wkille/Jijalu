<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    //public $sourcePath = ''; //where the assets are located when they're not in the web accessible directory (they will be copied into the web accessible directory)
    public $basePath = '@webroot'; //where the assets are located when in the web accessible directory (web or web etc)
    public $baseUrl = '@web'; //url where assets are located
    public $css = [
        //YII_ENV_DEV ? 'vendor/fontawesome-free/css/all.css' : 'vendor/fontawesome-free/css/all.min.css',
        'vendor/simple-line-icons/css/simple-line-icons.css',
        'https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        YII_ENV_DEV ? 'css/landing-page.css' : 'css/landing-page.min.css'
    ];
    public $js = [
        YII_ENV_DEV ? 'vendor/bootstrap/js/bootstrap.bundle.js' : 'vendor/bootstrap/js/bootstrap.bundle.min.js'
    ];
    public $depends = [ //in the app vendor folder
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        FontAwesomeAsset::class
    ];
}
