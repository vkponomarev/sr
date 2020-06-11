<?php

/* @var $this \yii\web\View */

/*
 *  'productsBrand' => ArrayHelper::map($productsBrand,'url','plates_title'),
            'productsCarrying' => ArrayHelper::map($productsCarrying,'url','plates_title'),
            'productsMotor'*/

//(new \common\components\dump\Dump())->printR($categoriesSplit['productsCarrying']);
?>

<div class="row">


        <?php if ($categoriesSplit['productsCarrying']):?>
        <div class="category-options col-xs-6 col-md-4">
            <?php
            //echo '<label class="control-label">Provinces</label>';
            echo \kartik\select2\Select2::widget([
                'name' => 'state_10',
                'data' => $categoriesSplit['productsCarrying'],
                'options' => [
                    'placeholder' => 'Грузоподъемность',
                    'multiple' => false,
                    'onchange' => "if (this.value) window.location.href = '/category/'+this.value",
                ],
            ]);
            ?>
        </div>
        <?php endif;?>
        <?php if ($categoriesSplit['productsMotor']):?>
        <div class="category-options col-xs-6 col-md-4">
            <?php
            //echo '<label class="control-label">Provinces</label>';
            echo \kartik\select2\Select2::widget([
                'name' => 'state_10',
                'data' => $categoriesSplit['productsMotor'],
                'options' => [
                    'placeholder' => 'Двигатель',
                    'multiple' => false,
                    'onchange' => "if (this.value) window.location.href = '/category/'+this.value",
                ],
            ]);
            ?>
        </div>
        <?php endif;?>
        <?php if ($categoriesSplit['productsBrand']):?>
        <div class="category-options col-xs-6 col-md-4">
            <?php
            //echo '<label class="control-label">Provinces</label>';
            echo \kartik\select2\Select2::widget([
                'name' => 'state_10',
                'data' => $categoriesSplit['productsBrand'],
                'options' => [
                    'placeholder' => 'Бренд',
                    'multiple' => false,
                    'onchange' => "if (this.value) window.location.href = '/category/'+this.value",
                ],
            ]);
            ?>
        </div>
        <?php endif;?>
        <?php if ($categoriesSplit['productsTypeSecond']):?>
            <div class="category-options col-xs-6 col-md-4 ">
                <?php
                //echo '<label class="control-label">Provinces</label>';
                echo \kartik\select2\Select2::widget([
                    'name' => 'state_10',
                    'data' => $categoriesSplit['productsTypeSecond'],
                    'options' => [
                        'placeholder' => 'Тип',
                        'multiple' => false,
                        'onchange' => "if (this.value) window.location.href = '/category/'+this.value",
                    ],
                ]);
                ?>
            </div>
        <?php endif;?>

</div>