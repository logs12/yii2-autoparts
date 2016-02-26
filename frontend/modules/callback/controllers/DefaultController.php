<?php

namespace app\modules\callback\controllers;

use yii\web\Controller;
//use models\Callback;
class DefaultController extends Controller
{
    public function actionIndex()
    {
        var_dump('ertrergerg');
        return $this->render('index');
    }
}
