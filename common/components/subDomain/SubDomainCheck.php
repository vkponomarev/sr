<?php

namespace common\components\subDomain;

use Yii;
use yii\web\NotFoundHttpException;

class SubDomainCheck
{

    public function check($subDomain)
    {

        if ($subDomain <> 'skladder'){

            $findSubDomain = Yii::$app->db
                ->createCommand('
            select
            *
            from
            city
            where
            domain = :subDomain
            ', [':subDomain' => $subDomain])
                ->queryAll();
            //echo $id;
            //(new \common\components\dump\Dump())->printR($artistsAlbums);

            if ($findSubDomain){

                return $subDomain;

            } else {

                throw new NotFoundHttpException('404');

            }



        } else {

            return false;

        }


    }




}

