<?php

namespace common\components\categories;

use Yii;
use yii\web\NotFoundHttpException;

class CategoriesParent
{

    public function data($ID, $languageID)
    {

        $data = Yii::$app->db
            ->createCommand('
            select
            pages.id,
            pages.url,
            pages.photo,
            pages.name,
            pages.sort,
            pages.products_carrying,
            pages.products_motor,
            pages.products_brand,
            pages.products_type_second,
            pages.category_type,
            pages_text.title,
            pages_text.plates_title,
            pages_text.h1,
            pages_text.description,
            pages_text.text1,
            pages_text.text2
            from
            pages
            join pages_text on pages_text.pages_id = pages.id
            where pages.parent_id = "' . $ID . '" and pages_text.languages_id = "' . $languageID . '"
            order by pages.sort
            ')
            ->queryAll();
        //(new \common\components\dump\Dump())->printR($data);
        return $data;
    }

}

