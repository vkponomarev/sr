<?php

use yii\helpers\Html;
use yii\grid\GridView;
use oxycoach\imageswidget\ImagesUploadWidget;


/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'url:url',
            'active',
            [
                'label' => 'Переводы',
                'format' => ['html'],
                'value' => function ($data) {


                    return $data->translateButtons($data);

                },
            ],



            'motor',
            //'brand',
            //'carrying',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
