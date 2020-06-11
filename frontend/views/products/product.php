<?php

/* @var $this yii\web\View
 */


?>



<div class="wrap wrap-product">

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
                <?php
                $carousel = [
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/products/' . $productsImages[$productData['id']][1]), '/files/products/' . $productsImages[$productData['id']][1],
                            ['rel' => 'fancybox',  'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/products/' . $productsImages[$productData['id']][2]), '/files/products/' . $productsImages[$productData['id']][2],
                            ['rel' => 'fancybox',  'data-fancybox' => 'gallery']),
                        'caption' => '',
                        'options' => ['class' => 'image-modal']
                    ],
                    [
                        'content' => \yii\helpers\Html::a(\yii\helpers\Html::img('/files/products/' . $productsImages[$productData['id']][3]), '/files/products/' . $productsImages[$productData['id']][3],
                            ['rel' => 'fancybox',  'data-fancybox' => 'gallery']),
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

            <div class="main-text-and-pic col-xs-12 col-sm-6">
            <span class="main-text">

            </span>
                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">Получить<br>консультацию</button>
                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">Получить<br>прайс-лист</button>

            </div>

        </div>
    </div>

</div>


<div class="wrap wrap-product-info">
    <div class="container">


        <?php echo Yii::$app->params['text']['text1']; ?>


    </div>

</div>
