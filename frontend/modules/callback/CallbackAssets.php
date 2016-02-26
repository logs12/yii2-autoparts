<?php

namespace app\modules\callback;

use yii\web\AssetBundle;

class CallbackAssets extends AssetBundle
{
    public $sourcePath = '@app/modules/callback/assets';
    public $css = [
        'css/callback.css'
    ];

    public $js = [
        'js/callback.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}