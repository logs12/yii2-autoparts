<?php
/**
 * Created by PhpStorm.
 * User: vasil
 * Date: 13.03.2016
 * Time: 17:03
 */

namespace app\widgets\countdown;

use yii\web\AssetBundle;

class CountdownAssets extends AssetBundle
{
	public $sourcePath = '@app/widgets/countdown/assets';
	public $css = [
			'css/countdown.css'
	];

	public $js = [
			'js/countdown.js'
	];
	/*public $depends = [
			'yii\web\YiiAsset',
			'yii\bootstrap\BootstrapAsset',
	];*/
}