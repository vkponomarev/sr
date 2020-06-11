<?php

namespace common\components\category;

class CategoryConfig
{

    public function config($id)
    {

        $config[5] = [
            'carrying' => '1',
            'motor' => '2',
            'brand' => '3',

        ];

        return $config[$id];

    }


}

