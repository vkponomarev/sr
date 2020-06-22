<?php

/* @var $this yii\web\View
 */


/*
 * <div class="wrap main-spacer">
</div>





<div class="div-company-pictures col-xs-6 col-sm-6 col-md-3">

                <a href="/files/documents/sertifikat-1.jpg" rel="fancybox" data-fancybox="gallery">
                    <img class="img-company" src="/files/documents/sertifikat-1.jpg" height="100%">
                </a>
            </div>
            <div class="div-company-pictures col-xs-6 col-sm-6 col-md-3">
                <a href="/files/documents/sertifikat-2.jpg" rel="fancybox" data-fancybox="gallery">
                    <img class="img-company" src="/files/documents/sertifikat-2.jpg" height="100%">
                </a>
            </div>
            <div class="div-company-pictures col-xs-6 col-sm-6 col-md-3">
                <a href="/files/documents/sertifikat-3.jpg" rel="fancybox" data-fancybox="gallery">
                    <img class="img-company" src="/files/documents/sertifikat-3.jpg" height="100%">
                </a>
            </div>
            <div class="div-company-pictures col-xs-6 col-sm-6 col-md-3">
                <a href="/files/documents/sertifikat-4.jpg" rel="fancybox" data-fancybox="gallery">
                    <img class="img-company" src="/files/documents/sertifikat-4.jpg" height="100%">
                </a>
            </div>
 *
 * */

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

                <img class="main-page-image" src="/files/main-page-products/vilochnii-pogruzchik.png">

            </div>

            <div class="main-text-and-pic col-xs-12 col-sm-6"><br><br>
                <span class="main-text">
                от официального дистрибьютора
            </span>
                <br><br>
                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">
                    Получить<br>консультацию
                </button>
                <br><br>
                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">
                    Получить<br>прайс-лист
                </button>
                <br><br>
                <span class="main-text">
                Тел: <?=  Yii::$app->params['phone'] ?>
            </span>

            </div>

        </div>
        <div class="row">
            <br><br>
        </div>
    </div>

</div>

<div class="wrap wrap-contacts">

    <div class="container">
        <div class="div-second-contacts col-xs-12 col-sm-6">

            <i class="fa fa-phone icon-main-second" aria-hidden="true"></i><br>

            <?= Yii::$app->params['phone'] ?>

        </div>

        <div class="div-second-contacts col-xs-12 col-sm-6">

            <i class="fa fa-envelope icon-main-second" aria-hidden="true"></i><br>

            <?= Yii::$app->params['email'] ?>

        </div>
    </div>

</div>


<?= $this->render('/partials/category/_category', [

    'categoriesData' => $categoriesData,
]); ?>


<div class="wrap wrap-small-info">

    <div class="container">
        <div class="div-small-info col-xs-6 col-sm-3">

            <i class="fa fa-calendar icon-main-second" aria-hidden="true"></i><br>
            15 лет на рынке

        </div>
        <div class="div-small-info col-xs-6 col-sm-3">

            <i class="fa fa-bus icon-main-second" aria-hidden="true"></i><br>
            18300
            Продано единиц техники


        </div>
        <div class="div-small-info col-xs-6 col-sm-3">

            <i class="fa fa-users icon-main-second" aria-hidden="true"></i><br>
            Тысячи довольных клиентов

        </div>
        <div class="div-small-info col-xs-6 col-sm-3">

            <i class="fa fa-cart-plus icon-main-second" aria-hidden="true"></i><br>
            Бесплатная доставка

        </div>
    </div>

</div>




<?= $this->render('/partials/company/_company', [

]); ?>


<div class="wrap main-spacer">
</div>

<?= $this->render('/partials/documents/_documents', [

]); ?>


<div class="wrap main-spacer">
</div>

<?= $this->render('/partials/partners/_partners', [

]); ?>

<div class="wrap main-spacer">
</div>

<?= $this->render('/partials/lising/_lising', [

]); ?>

<div class="wrap main-spacer">
</div>


<?= $this->render('/partials/contacts/_contacts', [

]); ?>






