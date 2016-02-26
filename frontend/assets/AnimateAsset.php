<?php
/**
 * Created by PhpStorm.
 * User: vasil
 * Date: 23.02.2016
 * Time: 9:43
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class AnimateAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/main/source/animate';
    public $css = ['css/animate.min.css'];
    public $js = ['js/wow.min.js'];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}