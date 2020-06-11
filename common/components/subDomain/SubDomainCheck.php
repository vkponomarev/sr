<?php

namespace common\components\subDomain;

use http\Exception\RuntimeException;
use Yii;
use yii\web\NotFoundHttpException;

class SubDomainCheck
{

    public function check($subDomain)
    {

        if ($subDomain <> 'skladder'){

            $subDomainData = Yii::$app->db
                ->createCommand('
            select
            *
            from
            city
            where
            domain = :subDomain
            ', [':subDomain' => $subDomain])
                ->queryOne();
            //echo $id;
            //(new \common\components\dump\Dump())->printR($artistsAlbums);

            if ($subDomainData){

                return $subDomainData;

            } else {

                throw new NotFoundHttpException('404');

            }

        } else {

            return false;

        }


    }




}

