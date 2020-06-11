<?php

/* @var $this yii\web\View */
use yii\widgets\Pjax;
$this->title = 'My Yii Application';
//echo $pageText['title'];
?>
<div class="wrap wrap-company">
    <div class="container main-page-headers">
        <a name="production"></a><?= Yii::$app->params['text']['h1'] ?>
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
