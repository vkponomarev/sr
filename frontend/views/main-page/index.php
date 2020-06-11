<?php

/* @var $this yii\web\View
 */


/*
 * <div class="wrap main-spacer">
</div>

<div class="wrap wrap-main-partners">
    <div class="container">


        <div class="container main-page-headers">
            Наши партнеры
        </div>
        <br><br>
        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">

            <img src="/files/partners/aeroflot.png" width="200">

        </div>

        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">
            <img src="/files/partners/inter.png" width="200">

        </div>

        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">
            <img src="/files/partners/mmk.png" width="200">

        </div>

        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">
            <img src="/files/partners/oboron-service.png" width="200">

        </div>
        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">
            <img src="/files/partners/pochta-rossii.png" width="200">

        </div>
        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">
            <img src="/files/partners/ros-telekom.png" width="200">

        </div>
        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">
            <img src="/files/partners/rosneft.png" width="200">

        </div>
        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">
            <img src="/files/partners/rus-gidro.png" width="200">

        </div>
        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">
            <img src="/files/partners/tat-neft.png" width="200">

        </div>
        <div class="div-main-partners col-xs-6 col-sm-4 col-md-3">
            <img src="/files/partners/ural-kalii.png" width="200">

        </div>
    </div>

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

<div class="wrap wrap-contacts">

    <div class="container">
        <div class="div-second-contacts col-xs-12 col-sm-6">

            <i class="fa fa-phone icon-main-second" aria-hidden="true"></i><br>

            89626519894

        </div>

        <div class="div-second-contacts col-xs-12 col-sm-6">

            <i class="fa fa-envelope icon-main-second" aria-hidden="true"></i><br>

            skladder@gmail.com

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


<div class="wrap wrap-company">
    <div class="container main-page-headers">
        <a name="production"></a>Наша компания
    </div>
    <div class="container company-container">
        <div class="row">
            <div class="div-main-company col-xs-12 col-sm-12 col-md-12">
                <hr class="text-hr">
                <span class="text-header-two">Мы являемся официальным дистрибьютором спецтехники и запчастей для погрузчиков JAC</span><br><br>
            </div>
        </div>
        <br>
        <div class="row">

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
        </div>

        <br> <br> <br>

        <div class="row">
            <div class="div-main-company col-xs-12 col-sm-12 col-md-12">
                <hr class="text-hr">
                <span class="text-header-two">Организаторы «Формулы-1» выбрали из множества претендентов именно погрузчики, предоставляемые нашей компанией</span><br><br>
            </div>
        </div>
        <br>
        <div class="row">

            <div class="div-company-pictures-2 col-xs-6 col-sm-6 col-md-6">

                <a href="/files/documents/formula1.jpg" rel="fancybox" data-fancybox="gallery">
                    <img class="img-company" src="/files/documents/formula1.jpg" width="90%">
                </a>
            </div>
            <div class="div-company-pictures-2 col-xs-6 col-sm-6 col-md-6">
                <a href="/files/documents/formula2.jpg" rel="fancybox" data-fancybox="gallery">
                    <img class="img-company" src="/files/documents/formula2.jpg" width="90%">
                </a>
            </div>
            <div class="div-company-pictures-2 col-xs-6 col-sm-6 col-md-6">
                <a href="/files/documents/formula3.jpg" rel="fancybox" data-fancybox="gallery">
                    <img class="img-company" src="/files/documents/formula3.jpg" width="90%">
                </a>
            </div>
            <div class="div-company-pictures-2 col-xs-6 col-sm-6 col-md-6">
                <a href="/files/documents/formula4.jpg" rel="fancybox" data-fancybox="gallery">
                    <img class="img-company" src="/files/documents/formula4.jpg" width="90%">
                </a>
            </div>
        </div>

    </div>

</div>


<div class="wrap main-spacer">
</div>


<?= $this->render('/partials/contacts/_contacts', [

]); ?>

<div class="wrap main-spacer">
</div>



<?= $this->render('/partials/sub-domains/_sub-domains', [
    'subDomainsData' => $subDomainsData,
]); ?>


