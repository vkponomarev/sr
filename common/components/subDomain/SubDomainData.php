<?php

namespace common\components\subDomain;

use Yii;
use yii\web\NotFoundHttpException;

class SubDomainData
{

    public function data()
    {

        $url = Yii::$app->request->hostInfo;
        $parsedUrl = parse_url($url);
        $host = explode('.', $parsedUrl['host']);
        $subDomain = $host[0];

        return $subDomain;
    }




}

