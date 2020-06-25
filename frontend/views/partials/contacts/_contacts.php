<?php

/* @var $this \yii\web\View */

?>

<div class="wrap wrap-main-contacts">
    <div class="container">


        <div class="container main-page-headers">
            <a name="contacts"></a>Контакты
        </div>
        <br>
        <hr>
        <div class="text-header-three">
            <span class="text-header-two">Ваш персональный менеджер:</span><br>
            <span class="text-header-two">Александр</span>

        </div>
        <hr><br><br>
        <div class="div-main-contacts col-xs-12 col-sm-6 col-md-6">


            <img class="contact-image"src="/files/contacts2.jpg" width="100%">
        </div>

        <div class="div-main-contacts col-xs-12 col-sm-6 col-md-6">
            <div class="contact-form">
                <span class="main-contacts-phone-header">Телефон:</span><br><br>
                <span class="main-contacts-phone"><?=  Yii::$app->params['phone'] ?></span><br><br>

                <span class="main-contacts-phone-header">Или оставьте заявку на звонок:</span><br>
                <br><br>

                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">Перезвонить</button>

                <br><br>
                <span>Перезвоним в течении 10 минут</span>
            </div>

        </div>

    </div>

</div>
