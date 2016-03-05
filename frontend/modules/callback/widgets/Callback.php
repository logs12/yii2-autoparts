<?php
/**
 * Callback.php
 * @author: work
 */

namespace app\modules\callback\widgets;

use yii\bootstrap\Widget;
use app\modules\callback\models\CallbackForm;

class Callback extends Widget
{

    public $typeView;

    public function init(){}

    public function run(){

        $model = new CallbackForm();

        if ($this->typeView == 'popupForm')
            return $this->render('popupForm',
                ['model'=>$model]
            );
        elseif ($this->typeView == 'simpleForm')
            return $this->render('simpleForm',
                ['model'=>$model]
            );
    }
}