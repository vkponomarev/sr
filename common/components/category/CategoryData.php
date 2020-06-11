<?php

namespace common\components\category;

use Yii;
use yii\web\NotFoundHttpException;

class CategoryData
{

    public function data($id, $languageID)
    {

        $data = Yii::$app->db
            ->createCommand('
            select
            pages.id,
            pages.url,
            pages.photo,
            pages.products_carrying,
            pages.products_motor,
            pages.products_brand,
            pages.products_type,
            pages.photo,
            pages.photo,
            pages_text.title,
            pages_text.h1,
            pages_text.description,
            pages_text.text1,
            pages_text.text2
            from
            pages
            join pages_text on pages_text.pages_id = pages.id
            where pages.id = "' . $id . '" and pages_text.languages_id = "' . $languageID . '"
            ')
            ->queryOne();
        //(new \common\components\dump\Dump())->printR($data);
        return $data;
    }

}

