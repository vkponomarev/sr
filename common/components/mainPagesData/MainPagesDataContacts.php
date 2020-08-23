<?php

namespace common\components\mainPagesData;



use Yii;
use yii\web\NotFoundHttpException;



class MainPagesDataContacts
{


    public function contacts()
    {

        Yii::$app->params['phone'] = '8917-358-88-79';
        Yii::$app->params['email'] = 'skladder.ru@gmail.com';

    }




}

