<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsMotor */

$this->title = 'Create Products Motor';
$this->params['breadcrumbs'][] = ['label' => 'Products Motors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-motor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
