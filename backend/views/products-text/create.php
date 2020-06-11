<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsText */

$this->title = 'Create Products Text';
$this->params['breadcrumbs'][] = ['label' => 'Products Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'languages' => $languages,
        'products' => $products,
    ]) ?>

</div>
