<?php

namespace common\components\categories;

class CategoriesConfig
{

    public function config($categoryData)
    {

        $config[1] = [
            'mainPage' => '5',
            //'motor' => '2',
        ];
        $config[2] = [
            'mainPage' => '6',
            //'motor' => '2',
        ];
        $config[3] = [
            'mainPage' => '8',
            //'motor' => '2',
        ];
        $config[4] = [
            'mainPage' => '9',
            //'motor' => '2',
        ];
        $config[5] = [
            'mainPage' => '10',
            //'motor' => '2',
        ];
        $config[6] = [
            'mainPage' => '5803',
            //'motor' => '2',
        ];
        return $config[$categoryData['products_type']];

    }


}

