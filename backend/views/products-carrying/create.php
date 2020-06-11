<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsCarrying */

$this->title = 'Create Products Carrying';
$this->params['breadcrumbs'][] = ['label' => 'Products Carryings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-carrying-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
