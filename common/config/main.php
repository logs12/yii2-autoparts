<?php

return [
    'language' => 'ru-RU',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules'=>[
     /*   'callback' => [
            'class' => 'common\modules\callback\Module',
        ],*/
    ],
    'components' => [
        'db' => require(dirname(__DIR__).'/config/db.php'),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'assetManager' => [
            'linkAssets' => true,
            'appendTimestamp' => true,
        ],
        'mail' => [
            'class'            => 'zyx\phpmailer\Mailer',
            'viewPath'         => '@common/mail',
            'useFileTransport' => false,
            'config'           => [
                'mailer'     => 'smtp',
                'host'       => 'smtp.gmail.com',
                'port'       => '465',
                'smtpsecure' => 'ssl',
                'smtpauth'   => true,
                'username'   => 'vasiliys492@gmail.com',
                'password'   => '1q2w3eqaedws',
                'ishtml' => true,
                'charset' => 'UTF-8'
            ],
        ],
    ],

];
