<?php

namespace common\components\category;

class Category

{

    function __construct()
    {

    }

    function data($id, $languageID)
    {

        return (new CategoryData())->data($id, $languageID);

    }

    function config($id)
    {

        return (new CategoryConfig())->config($id);

    }

}

