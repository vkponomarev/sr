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
use yii\web\Controller;


/**
 * Main controller
 * pageText($currentPage,$pageUsingKeys)
 *
 *
 *
 *
 */
class ProductsController extends Controller
{


    public function actionIndex($url)
    {

        $mainPagesData = new MainPagesData($url, 'products');
        //(new \common\components\dump\Dump())->printR($mainPagesData);
        $category = new Category();
        $categoryData = $category->data($mainPagesData->pageId, $mainPagesData->currentLanguage['id']);

        $categories = new Categories();
        $categoriesData = $categories->data($mainPagesData->pageId, $mainPagesData->currentLanguage['id']);
       //$categoryConfig = $category->config($mainPagesData->pageId);

        $products = new Products();
        $productsData = $products->data($url, $mainPagesData->languageID);
        //(new \common\components\dump\Dump())->printR($productsData);

        $productsImages = $products->images();

        $product = new Product();
        $productData = $product->data($mainPagesData->pageId, $mainPagesData->languageID);
        //(new \common\components\dump\Dump())->printR($productsImage);
        return $this->render('product', [

            'categoryData' => $categoryData,
            'categoriesData' => $categoriesData,
            'productsData' => $productsData,
            'productsImages' => $productsImages,
            'productData' => $productData,
        ]);

    }


}
