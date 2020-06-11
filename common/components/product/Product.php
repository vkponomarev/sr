<?php

namespace common\components\product;

class Product
{

    function __construct($id = 0)
    {

    }

    function data($productID, $languageID)
    {

        return (new ProductData())->data($productID, $languageID);

    }

}

