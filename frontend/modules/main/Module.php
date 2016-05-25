<?php

namespace app\modules\main;


class Module extends \yii\base\Module
{
    public $defaultRoute = 'main';

    public $controllerNamespace = 'app\modules\main\controllers';

    public function init()
    {
        parent::init();
        $this->setLayoutPath('@frontend/views/layouts');
    }
}