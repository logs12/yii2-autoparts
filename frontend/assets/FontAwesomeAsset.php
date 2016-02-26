<?php
/**
 * FontAwesomeAsset.php
 * @author: work
 */

namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class FontAwesomeAsset extends AssetBundle
{

    public $sourcePath = '@bower/font-awesome';
    public $css = ['css/font-awesome.min.css'];

   /* public $jsOptions = [
        'position' => View::POS_HEAD
    ];*/
}