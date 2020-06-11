<?php

namespace common\components\mainPagesData;


use Yii;

class MainPagesDataPageText
{


    public function text($currentPageId, $currentLanguageId, $tableName)
    {
        //echo $languageId;

        if ($tableName == 'pages') {

            $pageText = Yii::$app->db
                ->createCommand('
            select
            pages_text.title,
            pages_text.h1,
            pages_text.description,
            pages_text.text1,
            pages_text.text2
            from
            pages_text
            join pages on pages_text.pages_id = pages.id
            where pages.id = "' . $currentPageId . '" and pages_text.languages_id = "' . $currentLanguageId . '"
            ')
                ->queryOne();

            return $pageText;
        }

        if ($tableName == 'products') {

            $pageText = Yii::$app->db
                ->createCommand('
            select
            products_text.title,
            products_text.h1,
            products_text.description,
            products_text.text1,
            products_text.text2
            from
            products_text
            join products on products_text.products_id = products.id
            where products.id = "' . $currentPageId . '" and products_text.languages_id = "' . $currentLanguageId . '"
            ')
                ->queryOne();

            return $pageText;
        }

        return false;

    }


}

