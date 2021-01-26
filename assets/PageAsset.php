<?php


namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class pageAsset
 * @package app\assets
 */
class PageAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css'
    ];
    public $js = [
        ];
    public $depends = [ //in the app vendor folder
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}