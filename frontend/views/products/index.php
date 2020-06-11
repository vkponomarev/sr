<?php

/* @var $this yii\web\View
 */


?>


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

<?= $this->render('/partials/products/_our-products', [

    'productsData' => $productsData,

]); ?>


