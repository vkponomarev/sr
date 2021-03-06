<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\AppAsset;
use common\components\feedBack\FBFWidget;
AppAsset::register($this);


//Url::home();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <meta name="description" content="<?= Yii::$app->params['text']['description'] ?>">
    <?php $this->registerCsrfMetaTags() ?>


    <title><?= Yii::$app->params['text']['title'] ?></title>
    <?php $this->head() ?>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170840760-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-170840760-1');
    </script>


</head>
<body role="document">
<?php $this->beginBody() ?>

<div class="wrap wrap-header">

    <div class="header-top-line">

        <a href="/" rel="nofollow" class="header-top-line-site-name-link">SKLADDER</a>

    </div>

    <nav class="navbar-default header-nav-line">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed nav-button" data-toggle="collapse"
                    data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div id="navbar" class="navbar-collapse collapse nav-bar-collapsed ">

            <ul class="nav navbar-nav nav-bar-collapsed-ul">

                <li class="nav-link navbar-li">

                    <a href="/category/" class="dropdown-toggle navbar-a-link">

                        <?= Yii::t('app', 'Продукция') ?>

                    </a>

                </li>

                <li class="navbar-separator">
                    |
                </li>


                <li class="dropdown navbar-li">
                    <a href="/cms/company-4/" class="dropdown-toggle navbar-a-link">

                        <?= Yii::t('app', 'Компания') ?>

                    </a>
                </li>

                <li class="navbar-separator">
                    |
                </li>

                <li class="dropdown navbar-li">
                    <a href="/cms/contacts-5831/" class="dropdown-toggle navbar-a-link">

                        <?= Yii::t('app', 'Контакты') ?>

                    </a>
                </li>

            </ul>

        </div>

    </nav>

</div>

<?php

echo \newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=fancybox]',
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '90%',
        'maxHeight' => '90%',
        'playSpeed' => 7000,
        'padding' => 0,
        'fitToView' => false,
        'width' => '90%',
        'height' => '90%',
        'autoSize' => true,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'helpers' => [

            'buttons' => [],

        ],
    ]
]);

//echo ;
?>

<?= $content ?>


<div class="container">

    <?= $this->render('/partials/breadcrumbs/_breadcrumbs', [
        //'artist' => $artist,
    ]); ?>

</div>
<br><br><br>
<footer>
    <br>
    <div class="container">


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="contact">
                <span><?= Yii::t('app', 'SKLADDER.RU') ?></span>


                <li>
                    <a class="footer-a" href="/cms/cookie-3/"
                       rel="nofollow"><?= Yii::t('app', 'Cookie info') ?></a>
                </li>
                <li>
                    <a class="footer-a" href="/cms/policy-5830/"
                       rel="nofollow"><?= Yii::t('app', 'Privacy policy') ?></a>
                </li>

                <li>
                    <a class="footer-a" href="/cms/regions-5832/"
                       rel="nofollow"><?= Yii::t('app', 'Регионы') ?></a>
                </li>


            </ul>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

            <br> <br>
            <span class="main-contacts-phone">ТЕЛ: <?= Yii::$app->params['phone'] ?></span>
        </div>

    </div>
    <br><br><br>
</footer>

<script>

</script>

<?php $this->endBody() ?>
<?= $this->render('/partials/counters/_counters'); ?>
<?= \common\components\feedBack\FBFWidget::widget([]) ?>
</body>
</html>
<?php $this->endPage() ?>
