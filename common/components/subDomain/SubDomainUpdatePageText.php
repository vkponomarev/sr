<?php

namespace common\components\subDomain;

use Yii;

class SubDomainUpdatePageText
{

    public function update($subDomainCheck)
    {

        if ($subDomainCheck) {
            Yii::$app->params['text']['title'] = str_replace('{domain}', ' ' . $subDomainCheck, Yii::$app->params['text']['title']);
            Yii::$app->params['text']['h1'] = str_replace('{domain}', ' ' . $subDomainCheck, Yii::$app->params['text']['h1']);
            Yii::$app->params['text']['description'] = str_replace('{domain}', ' ' . $subDomainCheck, Yii::$app->params['text']['description']);
        } else {

            Yii::$app->params['text']['title'] = str_replace('{domain}', '', Yii::$app->params['text']['title']);
            Yii::$app->params['text']['h1'] = str_replace('{domain}', '', Yii::$app->params['text']['h1']);
            Yii::$app->params['text']['description'] = str_replace('{domain}', '', Yii::$app->params['text']['description']);


        }

    }

}

