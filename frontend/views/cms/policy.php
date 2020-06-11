<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
//echo $pageText['title'];
?>

<div class="wrap">
    <div class="container">
        <h1>   <?= Yii::$app->params['text']['h1'] ?> </h1>

        <?= Yii::$app->params['text']['text1'] ?>
    </div>
</div>