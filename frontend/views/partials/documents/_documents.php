<?php

/* @var $this \yii\web\View */

?>

<div class="wrap wrap-company">
    <div class="container main-page-headers">
        <a name="production"></a>Документы и сертификаты
    </div>
    <div class="container company-container">

        <hr class="text-hr">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php
                $carousel = [
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/doc1.jpg'), '/files/documents/doc1.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/doc2.jpg'), '/files/documents/doc2.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/doc3.jpg'), '/files/documents/doc3.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/doc4.jpg'), '/files/documents/doc4.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/doc5.jpg'), '/files/documents/doc5.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/doc6.jpg'), '/files/documents/doc6.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/doc7.jpg'), '/files/documents/doc7.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/doc8.jpg'), '/files/documents/doc8.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],


                ];

                echo \yii\bootstrap\Carousel::widget([
                    'items' => $carousel,
                    'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
                    'controls' => [
                        '<span class="glyphicon glyphicon-chevron-left left-right-buttons" aria-hidden="true"></span>',
                        '<span class="glyphicon glyphicon-chevron-right left-right-buttons" aria-hidden="true"></span>'
                    ]
                ]);


                ?>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <span class="text-header-two">У нас имеются все необходимые документы и сертификаты.</span><br><br>
                Вы не переплачиваете за технику, получая её от официального представителя в России по заводским ценам без посредников.<br><br>

                Вы получаете технику сразу, потому что на складе всегда более 150 единиц продукции и доставка осуществляется во все регионы России и СНГ.<br><br>

                Вы уверены в технике, так как гарантия составляет до 5 лет, а сеть сервисных центров расположены в 76 городах России.<br><br>

                Вам доступна вся техника, ведь приобрести ее можно в лизинг, выбрав одного из 10 партнеров.<br><br>

                Вы можете существенно сэкономить, сдав вашу технику в счет оплаты новой, воспользуясь услугой trade-in.<br><br>

            </div>
        </div>

    </div>

</div>