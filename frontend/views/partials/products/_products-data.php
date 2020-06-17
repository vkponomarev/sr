<?php

/* @var $this \yii\web\View */

if ($productsSort)
    $productsData = $productsSort;


?>

<div class="wrap wrap-products">
    <div class="container">


            <?= $this->render('/partials/category/_category-options', [

                'categoriesData' => $categoriesData,
                'categoryData' => $categoryData,
                'categoriesSplit' => $categoriesSplit,

            ]); ?>

        <hr>
        <div class="row">
            <?php foreach ($productsData as $product): ?>

                <div class="div-main-products col-xs-12 col-sm-6 col-md-4">

                    <a class="a-main-products" href="/products/<?= $product['url'] ?>/">
                        <img class="main-page-image" src="/files/products/<?= $productsImages[$product['id']][1] ?>">

                        <br>
                        <?= $product['plates_title'] ?>
                    </a>

                </div>


            <?php endforeach; ?>
        </div>
        <br>
        <hr>
        <br>
        <div class="row row-flex">
            <?= $this->render('/partials/category/_category-options-down', [

                'categoriesData' => $categoriesData,
                'categoryData' => $categoryData,
                'categoriesSplit' => $categoriesSplit,

            ]); ?>
        </div>
    </div>
    <br><br>
</div>
