<?php

namespace common\components\products;

class ProductsSort
{

    public function sort($productsData, $categoryData)
    {

        if ($categoryData['products_brand'] <> 0) {

            foreach ($productsData as $key => $value) {

                if ($categoryData['products_brand'] <> $value['brand'])
                    unset($productsData[$key]);

            }

        }

        if ($categoryData['products_carrying'] <> 0) {

            foreach ($productsData as $key => $value) {

                if ($categoryData['products_carrying'] <> $value['carrying'])
                    unset($productsData[$key]);

            }

        }

        if ($categoryData['products_motor'] <> 0) {

            foreach ($productsData as $key => $value) {

                if ($categoryData['products_motor'] <> $value['motor'])
                    unset($productsData[$key]);

            }

        }


        return $productsData;
    }

}

