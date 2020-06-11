<?php

/* @var $this \yii\web\View */



?>

<div class="wrap wrap-products">

    <div class="container main-page-headers">
        <a name="production"></a>Наша продукция
    </div>
    <div class="container">

<?php foreach ($categoryData as $category):?>

    <div class="div-main-products col-xs-12 col-sm-6 col-md-4">

        <a class="a-main-products" href="/products/<?= $category['url']  ?>/">
            <img class="main-page-image" src="/files/main-page-products/<?= $category['photo']  ?>" width="300">
            <br>
            <?= $category['h1']  ?>
        </a>

    </div>


<?php endforeach;?>



    </div>
    <br><br>
</div>
