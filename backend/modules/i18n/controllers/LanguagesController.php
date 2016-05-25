<?php

namespace backend\modules\i18n\controllers;

use Yii;
use backend\modules\i18n\models\I18nMessage;
use backend\modules\i18n\models\I18nMessageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LanguagesController implements the CRUD actions for I18nMessage model.
 */
class LanguagesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all I18nMessage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new I18nMessageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single I18nMessage model.
     * @param integer $id_category_message
     * @param string $language
     * @return mixed
     */
    public function actionView($id_category_message, $language)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_category_message, $language),
        ]);
    }

    /**
     * Creates a new I18nMessage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new I18nMessage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_category_message' => $model->id_category_message, 'language' => $model->language]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing I18nMessage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_category_message
     * @param string $language
     * @return mixed
     */
    public function actionUpdate($id_category_message, $language)
    {
        $model = $this->findModel($id_category_message, $language);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_category_message' => $model->id_category_message, 'language' => $model->language]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing I18nMessage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_category_message
     * @param string $language
     * @return mixed
     */
    public function actionDelete($id_category_message, $language)
    {
        $this->findModel($id_category_message, $language)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the I18nMessage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_category_message
     * @param string $language
     * @return I18nMessage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_category_message, $language)
    {
        if (($model = I18nMessage::findOne(['id_category_message' => $id_category_message, 'language' => $language])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
