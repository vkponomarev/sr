<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        //'@bower' => '@vendor/yidas/yii2-bower-asset/bower',
        '@npm'   => '@vendor/npm-asset',
        '@webupload' => '@frontend/web/files/products',
        '@upload' => '@frontend/web/files/products',
        '@uploadedfilesdir' => Yii::getAlias('@frontend'),

    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
