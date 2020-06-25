<?php

namespace common\components\categories;

class Categories

{

    function __construct()
    {

    }

    function data($parentID, $languageID)
    {

        return (new CategoriesData())->data($parentID, $languageID);

    }

    function parent($ID, $languageID)
    {

        return (new CategoriesParent())->data($ID, $languageID);

    }


    function split($categoriesData)
    {

        return (new CategoriesSplit())->split($categoriesData);

    }

    function config($categoryData)
    {

        return (new CategoriesConfig())->config($categoryData);

    }

}

