<?php

namespace common\components\subDomain;

class SubDomain
{

    function __construct($id = 0)
    {

    }

    function data()
    {

        return (new SubDomainData())->data();

    }

    function check($subDomain)
    {

        return (new SubDomainCheck())->check($subDomain);

    }

    function updatePageText($subDomainCheck)
    {

        (new SubDomainUpdatePageText())->update($subDomainCheck);

    }


}

