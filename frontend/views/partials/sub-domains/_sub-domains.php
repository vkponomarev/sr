<?php

/* @var $this \yii\web\View */

?>

<div class="wrap wrap-main-contacts">
    <div class="container">


        <div class="container main-page-headers">
            <a name="contacts"></a>Регионы
        </div>
        <br><br>

        <?php foreach ($subDomainsData as $subDomain):?>
            <?php if ($subDomain['id'] <> 1):?>


            <div class="div-main-regions col-xs-6 col-sm-4 col-md-4 col-md-3">


                    <?php
                    $url = yii\helpers\Url::current([], true);
                    $scheme = parse_url($url, PHP_URL_SCHEME);
                    $baseUrl = yii\helpers\Url::base([], true);

                    echo '<a class="regions-a" href="' . $scheme . '://' . $subDomain['domain'] . '.skladder.ru">';
                    echo $subDomain['name'];
                    echo '</a>';


                    ?>


            </div>

            <?php endif;?>
        <?php endforeach;?>


    </div>

</div>
