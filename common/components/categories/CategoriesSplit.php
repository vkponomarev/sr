<?php

namespace common\components\categories;

use yii\helpers\ArrayHelper;

class CategoriesSplit
{

    public function split($categoriesData)
    {

        $productsBrand = array();
        $productsCarrying = array();
        $productsMotor = array();
        $productsTypeSecond = array();
        foreach ($categoriesData as $item) {

            if ($item['products_brand'] <> 0) {

                array_push($productsBrand, $item);

            }

            if ($item['products_carrying'] <> 0) {

                array_push($productsCarrying, $item);

            }

            if ($item['products_motor'] <> 0) {

                array_push($productsMotor, $item);

            }

            if ($item['products_type_second'] <> 0) {

                array_push($productsTypeSecond, $item);

            }

        }

        //$categoriesDataMap = ArrayHelper::map($categoriesData,'url','plates_title');
        return [
            'productsBrand' => ArrayHelper::map($productsBrand,'url','plates_title'),
            'productsCarrying' => ArrayHelper::map($productsCarrying,'url','plates_title'),
            'productsMotor' => ArrayHelper::map($productsMotor,'url','plates_title'),
            'productsTypeSecond' => ArrayHelper::map($productsTypeSecond,'url','plates_title'),
        ];
    }

}

