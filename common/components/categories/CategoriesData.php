<?php

namespace common\components\categories;

use Yii;
use yii\web\NotFoundHttpException;

class CategoriesData
{

    public function data($parentID, $languageID)
    {

        $data = Yii::$app->db
            ->createCommand('
            select
            pages.id,
            pages.url,
            pages.photo,
            pages.name,
            pages.products_carrying,
            pages.products_motor,
            pages.products_brand,
            pages.products_type_second,
            pages_text.title,
            pages_text.plates_title,
            pages_text.h1,
            pages_text.description,
            pages_text.text1,
            pages_text.text2
            from
            pages
            join pages_text on pages_text.pages_id = pages.id
            where pages.parent_id = "' . $parentID . '" and pages_text.languages_id = "' . $languageID . '"
            order by pages.name
            ')
            ->queryAll();
        //(new \common\components\dump\Dump())->printR($data);
        return $data;
    }

}

