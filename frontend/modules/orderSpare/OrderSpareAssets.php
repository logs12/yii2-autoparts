<?php
namespace frontend\modules;
namespace frontend\modules\orderSpare;

use yii\web\AssetBundle;

class OrderSpareAssets extends AssetBundle
{
	public $sourcePath = '@frontend/modules/orderSpare/assets';
	public $css = [
			'css/orderSpare.css'
	];

	public $js = [
			'js/orderSpare.js'
	];
	public $depends = [
			'yii\web\YiiAsset',
			'yii\bootstrap\BootstrapAsset',
			'yii\bootstrap\BootstrapPluginAsset',
	];
}