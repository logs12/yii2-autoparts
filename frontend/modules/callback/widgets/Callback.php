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

    public function run(){

        $model = new CallbackForm();
        return $this->render('popup',
            ['model'=>$model]
        );
    }
}