<?php

/**
 * Created by PhpStorm.
 * User: vasil
 * Date: 13.03.2016
 * Time: 16:54
 */
namespace app\widgets\countdown;

use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class Countdown extends Widget
{
	public $options = [];

	public function init(){}

	public function run(){

		$this->registerClientScript();
		echo "<div id='CDT'></div>";
	}

	protected function registerClientScript()
	{
		$view = $this->getView();
		CountdownAssets::register($view);
		/*$this->clientOptions['selector'] = "#{$this->options['id']}";
		$options = Json::encode($this->clientOptions);
		$view->registerJs("window.onload=function(){CDT($options);}");*/
	}
}