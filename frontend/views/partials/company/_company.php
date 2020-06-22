<?php

/* @var $this \yii\web\View */

?>

<div class="wrap wrap-company">
    <div class="container main-page-headers">
        <a name="production"></a>Наша компания
    </div>
    <br>
    <hr>
    <div class="container company-container">


        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php
                $carousel = [
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/sertifikat-1.jpg'), '/files/documents/sertifikat-1.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/sertifikat-2.jpg'), '/files/documents/sertifikat-2.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/sertifikat-3.jpg'), '/files/documents/sertifikat-3.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/sertifikat-4.jpg'), '/files/documents/sertifikat-4.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ]


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
                <span class="text-header-two">Мы являемся официальным дистрибьютором спецтехники и запчастей для погрузчиков JAC.</span><br><br>
                <span class="simple-text">
                JAC - Качественная техника для склада из Китая.<br><br>
                По функциональным и техническим характеристикам JAC наиболее схож с погрузчиками Toyota.<br><br>
                Гарантия на технику 60 месяцев или 5000 мч, что сравнимо со сроком гарантии на японские погрузчики.<br><br>
                JAC – это государственная корпорация, в связи с чем идет серьезный государственный контроль качества сборки. Предъявляются особые требования к поставщикам комплектующих, а также  качеству сплавов, двигателям, гидравлической системе.<br><br>
                Дилерская сеть на территории РФ (33 дилера).<br><br>
                Возможность комплектации погрузчиков оригинальными японскими двигателями NISSAN и ISUZU.<br><br>
                Обслуживание у официального дилера.<br><br>
                Выездные сервисные службы во всех регионах Российской Федерации.<br><br>
                Запасные части всегда в наличии.<br><br>
                Возможны различные варианты оплаты (например, 50 % - предоплата, 50 % - по факту поставки, рассрочка).<br><br>
                Сотрудничаем со многими лизинговыми компаниями.<br><br>
                Варианты доставки до места эксплуатации.<br><br>
                Ассортимент техники разной грузоподъемности от 1 до 10 тонн, разных комплектаций в наличии на складе от 150 до 300 единиц.<br><br>
                Поставка большегрузных (от 12 до 25 т) погрузчиков и погрузчиков с боковой погрузкой под заказ.<br><br>
                Скидки и подарки (тележки гидравлические, спец.одежда, сувениры) клиентам.<br><br>
                </span>
            </div>
        </div>

        <br> <br> <br>
        <hr class="text-hr">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6">
                <span class="text-header-two">Организаторы «Формулы-1» выбрали из множества претендентов именно погрузчики, предоставляемые нашей компанией.

                </span><br><br>
                <span class="simple-text">
                Спецтехника китайской марки JAC, предоставляемая нашей компанией, была задействована на российском этапе Гран-при «Формулы-1», проходившем в Сочи.
                Российские этапы с 2014 года чемпионата мира по кольцевым автогонкам проходят на трассе «Сочи Автодром».<br><br>

                С 2015 года выбор организаторов столь крупного и статусного мероприятия пал именно на технику JAC,
                что говорит о первоклассном качестве продукции и безупречной репутации производителя и официального дистрибьютора.<br><br>

                Поставки техники на каждый этап гонок составляют порядка 40-60 единиц, самой различной грузоподъемности от 1 до 10 тонн.
                Вся линейка техники зарекомендовала себя в самом лучшем качестве, что позволяет продолжать сотрудничество на самом высоком уровне.<br><br>
                </span>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php
                $carousel = [
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/formula1.jpg'), '/files/documents/formula1.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery', 'border' => '1']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/formula2.jpg'), '/files/documents/formula2.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/formula3.jpg'), '/files/documents/formula3.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/documents/formula4.jpg'), '/files/documents/formula4.jpg',
                            ['rel' => 'fancybox', 'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ]


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


        </div>

        <br>

    </div>

</div>