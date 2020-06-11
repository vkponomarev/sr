<?php

namespace common\components\stock;

class Stock
{

    function __construct($id = 0)
    {

    }

    function data($productConfig)
    {

        return (new StockData())->data($productConfig);

    }

}

