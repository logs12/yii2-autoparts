<?php

namespace frontend\modules\orderSpare\controllers;

use frontend\modules\orderSpare\models\OrderSpareForm;
use Yii;
use yii\bootstrap\ActiveForm;
use yii\web\Controller;
use frontend\modules\orderSpare\models\Callback;
use yii\web\Response;

/**
 * Default controller for the `orderSpare` module
 */
class OrderSpareController extends Controller
{
	/**
	 * Renders the index view for the module
	 * @return string
	 */
	public function actionIndex() {
	}

	/**
	 * dispatch content fir tabs with id catalog-number
	 * @return string
	 */
	public function actionViewCatalogNumber() {
		$modelCallback = new Callback();
		$modelOrderSpareForm = new OrderSpareForm(['scenario' => OrderSpareForm::SCENARIO_CATALOG_NUMBER]);

		return $this->renderAjax('formCatalogNumber', [
			'modelCallback' => $modelCallback,
			'modelOrderSpareForm' => $modelOrderSpareForm
		]);

	}

	/**
	 * dispatch content fir tabs with id vin
	 * @return string
	 */
	public function actionViewVin() {
		$modelCallback = new Callback();
		$modelOrderSpareForm = new OrderSpareForm(['scenario' => OrderSpareForm::SCENARIO_VIN]);

		return $this->renderAjax('formVin', [
				'modelCallback' => $modelCallback,
				'modelOrderSpareForm' => $modelOrderSpareForm
		]);
	}

	public function actionCatalogNumber() {
		$modelCallback = new Callback();
		$modelOrderSpareForm = new OrderSpareForm(['scenario' => OrderSpareForm::SCENARIO_CATALOG_NUMBER]);
		$paramsCallback = [
				'_csrf' => Yii::$app->request->getBodyParam('_csrf'),
				'Callback' => Yii::$app->request->getBodyParam('Callback')
		];
		$paramsOrderSpareForm = [
				'_csrf' => Yii::$app->request->getBodyParam('_csrf'),
				'OrderSpareForm' => Yii::$app->request->getBodyParam('OrderSpareForm')
		];

		if($modelCallback->load($paramsCallback)
			&& $modelOrderSpareForm->load($paramsOrderSpareForm)
			&& $modelCallback->validate()
			&& $modelOrderSpareForm->validate()) {

			$transaction = Callback::getDb()->beginTransaction();
			try{
				$modelCallback->save(false);
				$modelCallback->getRelatedRecords();
				$modelOrderSpareForm->link('callback',$modelCallback);
				$transaction->commit();
			} catch (\Exception $e) {
				$transaction->rollBack();
				Yii::$app->session->setFlash('error',$e->getMessage());
			}
			return json_encode(true);
		} else {
			return $this->renderAjax('formCatalogNumber',[
				'modelCallback' => $modelCallback,
				'modelOrderSpareForm' => $modelOrderSpareForm,
			]);
		}
	}

	public function actionVin() {
		$modelCallback = new Callback();
		$modelOrderSpareForm = new OrderSpareForm(['scenario' => OrderSpareForm::SCENARIO_VIN]);
		$paramsCallback = [
				'_csrf' => Yii::$app->request->getBodyParam('_csrf'),
				'Callback' => Yii::$app->request->getBodyParam('Callback')
		];
		$paramsOrderSpareForm = [
				'_csrf' => Yii::$app->request->getBodyParam('_csrf'),
				'OrderSpareForm' => Yii::$app->request->getBodyParam('OrderSpareForm')
		];

		if($modelCallback->load($paramsCallback) &&
			$modelOrderSpareForm->load($paramsOrderSpareForm) &&
			$modelCallback->validate() &&
			$modelOrderSpareForm->validate()) {

			$transaction = Callback::getDb()->beginTransaction();
			try{
				$modelCallback->save(false);
				$modelCallback->getRelatedRecords();
				$modelOrderSpareForm->link('callback',$modelCallback);
				$transaction->commit();
			} catch (\Exception $e) {
				$transaction->rollBack();
				Yii::$app->session->setFlash('error',$e->getMessage());
			}
			return json_encode(true);
		} else {
			return $this->renderAjax('formVin',[
					'modelCallback' => $modelCallback,
					'modelOrderSpareForm' => $modelOrderSpareForm,
			]);
		}
	}
}