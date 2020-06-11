<?php

namespace frontend\controllers;


use common\components\albums\Albums;
use common\components\artists\Artists;
use common\components\categories\Categories;
use common\components\category\Category;
use common\components\mainPagesData\MainPagesData;
use common\components\product\Product;
use common\components\products\Products;
use common\components\song\Song;
use common\components\songs\Songs;
use yii\helpers\ArrayHelper;
use yii\web\Controller;


/**
 * Main controller
 * pageText($currentPage,$pageUsingKeys)
 *
 *
 *
 *
 */
class CategoryController extends Controller
{


    public function actionIndex()
    {

        $mainPagesData = new MainPagesData('products-2', 'pages');

        $category = new Category();
        $categoryData = $category->data(2, $mainPagesData->currentLanguage['id']);

        $categories = new Categories();
        $categoriesData = $categories->data(2, $mainPagesData->currentLanguage['id']);
        return $this->render('index', [

            'categoryData' => $categoryData,
            'categoriesData' => $categoriesData,


        ]);

    }

    public function actionCategory($url)
    {

        $mainPagesData = new MainPagesData($url, 'pages');

        $category = new Category();
        $categoryData = $category->data($mainPagesData->pageId, $mainPagesData->currentLanguage['id']);


        $categories = new Categories();
        $categoriesConfig = $categories->config($categoryData);
        $categoriesData = $categories->data($categoriesConfig['mainPage'], $mainPagesData->currentLanguage['id']);
        $categoriesSplit = $categories->split($categoriesData);

        //(new \common\components\dump\Dump())->printR($categoriesConfig);
        //$categoryConfig = $category->config($mainPagesData->pageId);

        $products = new Products();
        $productsData = $products->data($categoryData['products_type'], $mainPagesData->languageID);

        $productsSort = $products->sort($productsData, $categoryData);
        //(new \common\components\dump\Dump())->printR($productsData);



        $productsImages = $products->images();
        //(new \common\components\dump\Dump())->printR($productsImage);
        
        //$categoriesDataMap = ArrayHelper::map($categoriesData,'url','plates_title');
        //(new \common\components\dump\Dump())->printR($categoriesDataMap);
        return $this->render('category', [

            'categoryData' => $categoryData,
            'categoriesData' => $categoriesData,
            'productsData' => $productsData,
            'productsSort' => $productsSort,
            'productsImages' => $productsImages,
            'categoriesSplit' => $categoriesSplit,
        ]);

    }


}
