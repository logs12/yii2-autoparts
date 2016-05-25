<?php
/**
 * OrderSpareForm.php
 * @author: logs12
 */

namespace frontend\modules\orderSpare\widgets;

use Yii;
use yii\helpers\Html;
use yii\bootstrap\Widget;
use frontend\modules\orderSpare\OrderSpareAssets;


class OrderSpare extends Widget
{


	public function init () {
		parent::init();
		$view = Yii::$app->getView();
		$view->registerJs($this->getloadImg(),\yii\web\View::POS_END);
		$this->registerAssets();


	}

	public function run () {
		return $this->render('popapSpare');

	}

	public function registerAssets()
	{
		$view = $this->getView();
		OrderSpareAssets::register($view);
	}

	private function getloadImg()
	{
		$OrderSpareAssets = new OrderSpareAssets;
		$pathMainAsset = Yii::$app->assetManager->getPublishedUrl($OrderSpareAssets->sourcePath);
		return "var loadImgOrderShare = 'frontend/web". $pathMainAsset ."/images/load.gif'";
	}

}