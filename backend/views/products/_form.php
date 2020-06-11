<?php

use oxycoach\imageswidget\ImagesUploadWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */

/*
ImagesUploadWidget::widget([
    'form' => $form,
    'model' => $model,
    'name' => 'files',
    'multiple' => true,
    'size' => 'preview',
    'sortAction' => ['sort-images'],
    'deleteAction' => ['delete-image'],
])
 <img src="<?= $image ?>" alt="">

    // or 'use kartikile\FileInput' if you have only installed yii2-widget-fileinput in isolation
<?= $form->field($model, 'image')->fileInput(['options' => ['enctype' => 'multipart/form-data', 'multiple' => true]]) ?>
    <?= $form->field($model, 'image')->widget(\kartik\file\FileInput::classname(), [
        'options' => ['accept' => 'image/*', 'multiple' => true],
    ]); ?>

*/
?>

<div class="products-form">
    <?php // (new \common\components\dump\Dump())->printR($model); ?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'brand')->dropDownList(\common\models\Products::getProductsBrand()) ?>
    <?= $form->field($model, 'carrying')->dropDownList(\common\models\Products::getProductsCarrying()) ?>
    <?= $form->field($model, 'motor')->dropDownList(\common\models\Products::getProductsMotor()) ?>
    <?= $form->field($model, 'type')->dropDownList(\common\models\Products::getProductsType()) ?>
    <?= $form->field($model, 'type_second')->dropDownList(\common\models\Products::getProductsTypeSecond()) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
