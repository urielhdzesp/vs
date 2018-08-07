<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'es-MX', //idioma que se va a presentar al usuario
    'name' => 'Yellomile', //nombre de la aplicacion que se muestra a los usuarios
    'controllerNamespace' => 'frontend\controllers',
	
    'components' => [
		
		'request' => [
			'baseUrl' => $baseUrl,
		],
		
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
		
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
		
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		
		'urlManager' => [
			'baseUrl' => $baseUrl,
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
			    //'contactos/view/<id:\d{1}>' => 'contactos/view', se espera un numero de solo un digito
			    'contactos/view/<id:\d+>' => 'contactos/view'
			    
			    ]
		]
    ],
    'params' => $params,
];
