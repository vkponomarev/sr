<?php

namespace common\components\image;

class ImageUpload

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

