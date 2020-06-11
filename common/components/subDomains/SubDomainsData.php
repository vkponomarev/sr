<?php

namespace common\components\subDomains;

use Yii;
use yii\web\NotFoundHttpException;

class SubDomainsData
{

    public function data()
    {

        $data = Yii::$app->db
            ->createCommand('
            select
            *
            from
            city
            ')
            ->queryAll();
        //(new \common\components\dump\Dump())->printR($data);
        return $data;
    }




}

