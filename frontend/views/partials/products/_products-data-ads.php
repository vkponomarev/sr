<?php

/* @var $this \yii\web\View */

if ($productsSort)
    $productsData = $productsSort;


?>

<div class="wrap wrap-products">

    <div class="container">
        <br>

        <?= $this->render('/partials/category/_category-options', [

            'categoriesData' => $categoriesData,
            'categoryData' => $categoryData,
            'categoriesSplit' => $categoriesSplit,

        ]); ?>

        <hr>
        <div class="row">
            <?php $count = 0; ?>
            <?php foreach ($productsData as $product): ?>
                <?php $count++; ?>
                <div class="div-main-products col-xs-12 col-sm-6 col-md-4">

                    <a class="a-main-products" href="/products/<?= $product['url'] ?>/">
                        <img class="main-page-image" src="/files/products/<?= $productsImages[$product['id']][1] ?>">

                        <br>
                        <?= $product['plates_title'] ?>
                    </a>

                </div>

                <?php if ($count == 3) {
                    break;
                } ?>


            <?php endforeach; ?>

            <br><br>


        </div>

        <div class="row">
            <div class="div-main-products">
                <br><br>
                <a href="/category/forklift-trucks-5/" class="btn btn-success main-btn">Показать все</a>
            </div>
        </div>
    </div>

</div>
