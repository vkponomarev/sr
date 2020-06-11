<?php

/* @var $this \yii\web\View */

/*
 *  'productsBrand' => ArrayHelper::map($productsBrand,'url','plates_title'),
            'productsCarrying' => ArrayHelper::map($productsCarrying,'url','plates_title'),
            'productsMotor'*/

$productsCarrying = 0;
$productsMotor = 0;
$productsCarrying = 0;
$productsBrand = 0;
$productsTypeSecond = 0;
?>


<div class="container">

    <?php foreach ($categoriesData as $category): ?>
        <?php if ($category['products_carrying'] <> 0): ?>
            <?php $productsCarrying++ ?>
        <?php endif; ?>
        <?php if ($category['products_motor'] <> 0): ?>
            <?php $productsMotor++ ?>
        <?php endif; ?>
        <?php if ($category['products_brand'] <> 0): ?>
            <?php $productsBrand++ ?>
        <?php endif; ?>
        <?php if ($category['products_type_second'] <> 0): ?>
            <?php $productsTypeSecond++ ?>
        <?php endif; ?>

    <?php endforeach; ?>

    <?php if ($productsCarrying <> 0): ?>
        <div class="row">
            <span class=category-options-title>

                Грузоподъемность:

            </span>

            <?php $count = 0; ?>
            <?php foreach ($categoriesData as $category): ?>
                <?php if ($category['products_carrying'] <> 0): ?>
                    <?php if ($count >= 1): ?>,
                    <?php endif; ?>

                    <?php $count++; ?>
                    <a class="a-category-options" href="/category/<?= $category['url'] ?>/">
                        <?= $category['plates_title'] ?></a>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>


    <?php if ($productsMotor <> 0): ?>
        <div class="row">
            <span class=category-options-title>

                 Двигатель:

            </span>

            <?php $count = 0; ?>
            <?php foreach ($categoriesData as $category): ?>
                <?php if ($category['products_motor'] <> 0): ?>
                    <?php if ($count >= 1): ?>,
                    <?php endif; ?>

                    <?php $count++; ?>
                    <a class="a-category-options" href="/category/<?= $category['url'] ?>/">
                        <?= $category['plates_title'] ?></a>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>


    <?php if ($productsBrand <> 0): ?>
        <div class="row">
            <span class=category-options-title>

                 Бренд:

            </span>

            <?php $count = 0; ?>
            <?php foreach ($categoriesData as $category): ?>
                <?php if ($category['products_brand'] <> 0): ?>
                    <?php if ($count >= 1): ?>,
                    <?php endif; ?>

                    <?php $count++; ?>
                    <a class="a-category-options" href="/category/<?= $category['url'] ?>/">
                        <?= $category['plates_title'] ?></a>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>

    <?php if ($productsTypeSecond <> 0): ?>
        <div class="row">
            <span class=category-options-title>

                 Тип:

            </span>

            <?php $count = 0; ?>
            <?php foreach ($categoriesData as $category): ?>
                <?php if ($category['products_type_second'] <> 0): ?>
                    <?php if ($count >= 1): ?>,
                    <?php endif; ?>

                    <?php $count++; ?>
                    <a class="a-category-options" href="/category/<?= $category['url'] ?>/">
                        <?= $category['plates_title'] ?></a>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>

</div>

