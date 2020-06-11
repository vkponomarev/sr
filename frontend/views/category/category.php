<?php

/* @var $this yii\web\View
 */


?>

<div class="wrap wrap-main">

    <div class="container">
        <div class="row">
            <div class="div-h1-main">

                <h1 class="h1-main"><?= Yii::$app->params['text']['h1'] ?></h1>


            </div>
        </div>

        <div class="row">
            <br><br>
        </div>

        <div class="row">

            <div class="main-text-and-pic col-xs-12 col-sm-6">

                <img class="main-page-image" src="/files/main-page-products/<?= $categoryData['photo'] ?>">

            </div>

            <div class="main-text-and-pic col-xs-12 col-sm-6">
            <span class="main-text">
                от официального дистрибьютора
            </span>
                <br><br>
                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">Получить<br>консультацию</button>
                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">Получить<br>прайс-лист</button>

            </div>

        </div>
        <div class="row">
            <br><br>
        </div>
    </div>

</div>






<?= $this->render('/partials/products/_products-data',[

    'productsData' => $productsData,
    'productsSort' => $productsSort,
    'productsImages' => $productsImages,
    'categoriesData' => $categoriesData,
    'categoryData' => $categoryData,
    'categoriesSplit' => $categoriesSplit,

]); ?>





