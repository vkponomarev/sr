<?php

namespace common\components\stock;

use Yii;
use yii\web\NotFoundHttpException;

class StockData
{

    public function data($productConfig)
    {






        $data = Yii::$app->db
            ->createCommand('
            select
            pages.id,
            pages.url,
            pages.photo,
            pages_text.title,
            pages_text.h1,
            pages_text.description,
            pages_text.text1,
            pages_text.text2
            from
            pages
            join pages_text on pages_text.pages_id = pages.id
            where pages.parent_id = "' . $parentID . '" and pages_text.languages_id = "' . $languageID . '"
            ')
            ->queryAll();
        //(new \common\components\dump\Dump())->printR($data);
        return $data;
    }

}

