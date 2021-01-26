<?php


namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class FontAwesome
 * @package app\assets
 */
class FontAwesomeAsset extends AssetBundle {
    public $sourcePath = '@bower/font-awesome';
    public $css = [
        YII_ENV_DEV ? 'css/all.css' : 'css/all.min.css'
    ];
    public $publishOptions = [
        'only' => [
            'css/*',
            'webfonts/*'
        ]
    ];
}