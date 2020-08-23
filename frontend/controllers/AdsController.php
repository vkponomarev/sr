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
class AdsController extends Controller
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

        $this->layout = 'main-ads.php';
        //(new \common\components\dump\Dump())->printR($domain);
        $mainPagesData = new MainPagesData('forklift-trucks-5','pages');
        //(new \common\components\dump\Dump())->printR($domain);

        $category = new Category();
        $categoryData = $category->data($mainPagesData->pageId, $mainPagesData->currentLanguage['id']);

        $categories = new Categories();
        $categoriesConfig = $categories->config($categoryData);
        $categoriesData = $categories->data($categoriesConfig['mainPage'], $mainPagesData->currentLanguage['id']);
        $categoriesSplit = $categories->split($categoriesData);
        $categoriesParent = $categories->parent($mainPagesData->pageId, $mainPagesData->currentLanguage['id']);

        //(new \common\components\dump\Dump())->printR($categoriesParent);

        //$categoryConfig = $category->config($mainPagesData->pageId);

        $products = new Products();
        $productsData = $products->data($categoryData['products_type'], $mainPagesData->languageID);

        $productsSort = $products->sort($productsData, $categoryData);
        //(new \common\components\dump\Dump())->printR($productsData);

        $productsImages = $products->images();

        //$products = new Products();
        //$categoryData = $products->data(2, $mainPagesData->currentLanguage['id']);
        //(new \common\components\dump\Dump())->printR();




        return $this->render('folklift', [

            'categoryData' => $categoryData,
            'categoriesData' => $categoriesData,
            'productsData' => $productsData,
            'productsSort' => $productsSort,
            'productsImages' => $productsImages,
            'categoriesSplit' => $categoriesSplit,
            'categoriesParent' => $categoriesParent,

        ]);

    }


    public function actionKz()
    {

        $this->layout = 'main-ads.php';
        //(new \common\components\dump\Dump())->printR($domain);
        $mainPagesData = new MainPagesData('forklift-trucks-5','pages');
        //(new \common\components\dump\Dump())->printR($domain);

        $category = new Category();
        $categoryData = $category->data($mainPagesData->pageId, $mainPagesData->currentLanguage['id']);

        $categories = new Categories();
        $categoriesConfig = $categories->config($categoryData);
        $categoriesData = $categories->data($categoriesConfig['mainPage'], $mainPagesData->currentLanguage['id']);
        $categoriesSplit = $categories->split($categoriesData);
        $categoriesParent = $categories->parent($mainPagesData->pageId, $mainPagesData->currentLanguage['id']);

        //(new \common\components\dump\Dump())->printR($categoriesParent);

        //$categoryConfig = $category->config($mainPagesData->pageId);

        $products = new Products();
        $productsData = $products->data($categoryData['products_type'], $mainPagesData->languageID);

        $productsSort = $products->sort($productsData, $categoryData);
        //(new \common\components\dump\Dump())->printR($productsData);

        $productsImages = $products->images();

        //$products = new Products();
        //$categoryData = $products->data(2, $mainPagesData->currentLanguage['id']);
        //(new \common\components\dump\Dump())->printR();




        return $this->render('folklift-kz', [

            'categoryData' => $categoryData,
            'categoriesData' => $categoriesData,
            'productsData' => $productsData,
            'productsSort' => $productsSort,
            'productsImages' => $productsImages,
            'categoriesSplit' => $categoriesSplit,
            'categoriesParent' => $categoriesParent,

        ]);

    }

}
