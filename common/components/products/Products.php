<?php

namespace common\components\products;

class Products
{

    function __construct($id = 0)
    {

    }

    function data($categoryID, $languageID)
    {

        return (new ProductsData())->data($categoryID, $languageID);

    }

    function byCategory($categoryID, $languageID)
    {

        return (new ProductsByCategory())->products($categoryID, $languageID);

    }

    function images()
    {

        return (new ProductsImages())->images();


    }

    function sort($productsData, $categoryData)
    {

        return (new ProductsSort())->sort($productsData, $categoryData);


    }


}

