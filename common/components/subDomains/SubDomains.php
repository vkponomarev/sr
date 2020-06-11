<?php

namespace common\components\subDomains;

class SubDomains
{

    function __construct($id = 0)
    {

    }

    function data()
    {

        return (new SubDomainsData())->data();

    }


}

