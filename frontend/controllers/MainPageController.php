<?php
namespace frontend\controllers;

use Codeception\Module\Yii2;
use common\components\categories\Categories;
use common\components\category\Category;
use common\components\mainPagesData\MainPagesData;
use common\components\products\Products;

use common\components\subDomain\SubDomain;
use common\components\subDomains\SubDomains;
use yii;
use yii\web\Controller;


/**
 * Main controller
 * pageText($currentPage,$pageUsingKeys)
 *
 *
 *
 *
 */
class MainPageController extends Controller
{

    public $domain = 'false';

    public function init() {
/*
        $subDomain = new SubDomain();
        $subDomainData = $subDomain->data();
        $subDomainCheck = $subDomain->check($subDomainData);

        if ($subDomainCheck)
            $domain = $subDomainCheck;

        (new \common\components\dump\Dump())->printR($domain);*/
    }

    public function actionIndex()
    {
        //(new \common\components\dump\Dump())->printR($domain);
        $mainPagesData = new MainPagesData('index-1','pages');
        //(new \common\components\dump\Dump())->printR($domain);



        $categories = new Categories();
        $categoriesData = $categories->data(2, $mainPagesData->currentLanguage['id']);

        //$products = new Products();
        //$categoryData = $products->data(2, $mainPagesData->currentLanguage['id']);
        //(new \common\components\dump\Dump())->printR();




        return $this->render('index', [

            'categoriesData' => $categoriesData,


        ]);

    }

   


}
