<?php
/**
 * MainAssets.php
 * @author: work
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/main/assets';

    public $css = [
        'css/style.css',
    ];

    public $js = [
        'http://maps.google.com/maps/api/js',
        'js/main.js',
        'js/main-menu.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',

    ];

    public $jsOptions = [
        //'position' => View::POS_HEAD
        'position' => View::POS_END
    ];
}