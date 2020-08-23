<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);


return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'frontend\controllers',
    'components' => [

        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer'
        ],
        'request' => [
           // 'csrfParam' => '_csrf-frontend',
            'baseUrl' => '', //убрать frontend/web
           // 'class' => 'codemix\localeurls\UrlManager',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'enableStrictParsing' => false,
            //'class' => 'codemix\localeurls\UrlManager',
            //'languages' => ['en','ru','es','pt','ja','de','ko','fr','jv','vi','it','tr','uk','th','pl','az','ro','uz','hu','el','cs','zh','hi','bn'],
            //'enableDefaultLanguageUrlCode' => true,
            'rules' => [
                '/' => 'main-page/index',
                //"http://<domain>.skladder.loc/" => 'main-page/index',
                //'http://<domain>.skladder.loc/' => 'main-page/index',
                //'http://<domain: w="">.test.int/' => 'site/index',
                '/category' => 'category/index',
                '/category/<url>' => 'category/category',
                '/products/<url>' => 'products/index',

                '/ads/forklift' => 'ads/index',
                '/ads/forklift-kz' => 'ads/kz',

                //CMS
                //'/cms/' => 'cms/index',
                '/cms/cookie-3' => 'cms/cookie-info',
                '/cms/policy-5830' => 'cms/policy',
                '/cms/company-4' => 'cms/company',
                '/cms/contacts-5831' => 'cms/contacts',
                '/cms/regions-5832' => 'cms/regions',
            ],

            'suffix' => '/',
            'normalizer' => [
                'class' => 'yii\web\UrlNormalizer',
                'normalizeTrailingSlash' => true,
                'collapseSlashes' => true,
            ],

        ],

        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'en',
                    
                ],
            ],
        ],

    ],
    'sourceLanguage' => 'ru',
    'language' => 'ru',
    'params' => $params,
];
