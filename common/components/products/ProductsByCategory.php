<?php

namespace common\components\products;

use Yii;
use yii\web\NotFoundHttpException;

class ProductsByCategory
{

    public function products($categoryID, $languageID)
    {

        $products = Yii::$app->db
            ->createCommand('
            select
            products.id,
            products.url,
            products_text.title,
            products_text.h1,
            products_text.description,
            products_text.text1,
            products_text.text2
            from
            products
            join products_text on products_text.products_id = products.id
            where products.id = "' . $categoryID . '" and products_text.languages_id = "' . $languageID . '"
            ')
            ->queryAll();
        //(new \common\components\dump\Dump())->printR($data);
        return $products;
    }

}

