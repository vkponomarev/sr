<?php

/* @var $this yii\web\View
 */


?>

<?= $this->render('/partials/category/_category',[

    'categoriesData' => $categoriesData,
]); ?>

<div class="wrap wrap-contacts">



    <div class="container">
        <div class="div-second-contacts col-xs-12 col-sm-6">

            <i class="fa fa-phone icon-main-second" aria-hidden="true"></i><br>
            <?=  Yii::$app->params['phone'] ?>

        </div>

        <div class="div-second-contacts col-xs-12 col-sm-6">

            <i class="fa fa-envelope icon-main-second" aria-hidden="true"></i><br>
            <?=  Yii::$app->params['email'] ?>

        </div>
    </div>

</div>
