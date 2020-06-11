<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsBrand */

$this->title = 'Create Products Brand';
$this->params['breadcrumbs'][] = ['label' => 'Products Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-brand-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
