<?php

namespace common\models;

use yii\helpers\ArrayHelper;

/*
 * 'ImageBehavior' => [
                'class' => ImageBehavior::class,
                'imageModel' => Images::class,
                'imageVariable' => 'file',
                'uploadPath' => '@upload',
                'webUpload' => '@webupload',
                'noImagePath' => '@webupload/no-photo.png',
                'multiple' => true,
                'sizes' => [
                    'original' => [
                        'folder' => 'images/original'
                    ],
                    'preview' => [
                        'folder' => 'images/preview',
                        'width' => 350,
                        'height' => 0, // "0" means auto-height
                    ],
                ],
            ],
 * */

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int $active
 * @property int $motor
 * @property int $brand
 * @property int $carrying
 */
class Products extends \yii\db\ActiveRecord
{

    //public $file;

    public $image;
    //public $gallery;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }



    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ],


        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'active', 'motor', 'brand', 'carrying', 'type_second'], 'required'],
            [['active', 'motor', 'brand', 'carrying', 'type', 'type_second'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255],
            //[['file'], 'file', 'extensions' => ['png', 'jpg', 'jpeg', 'gif'], 'maxSize' => 1024*1024*1024, 'maxFiles' => 3],
            [['image'], 'file', 'extensions' => ['png', 'jpg', 'jpeg', 'gif'], 'maxFiles' => 5],
            //[['gallery'], 'file', 'extensions' => ['png', 'jpg', 'jpeg', 'gif'], 'maxFiles' => 5],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'image' => 'Image',
            'active' => 'Active',
            'motor' => 'Motor',
            'brand' => 'Brand',
            'carrying' => 'Carrying',
            'type' => 'Type',
            'type_second' => 'type_second',

        ];
    }

    public static function getProductsCarrying()
    {

        $productsCarrying = ProductsCarrying::find()->asArray()->all();
        $productsCarrying = ArrayHelper::map($productsCarrying, 'id', 'name');
        array_unshift($productsCarrying, 0);
        return $productsCarrying;
    }

    public static function getProductsBrand()
    {

        $productsBrand = ProductsBrand::find()->asArray()->all();
        $productsBrand = ArrayHelper::map($productsBrand, 'id', 'name');
        array_unshift($productsBrand, 0);
        return $productsBrand;
    }

    public static function getProductsMotor()
    {

        $productsMotor = ProductsMotor::find()->asArray()->all();
        $productsMotor = ArrayHelper::map($productsMotor, 'id', 'name');
        array_unshift($productsMotor, 0);
        return $productsMotor;
    }

    /*public function getOnProductsText(){
        return $this->hasMany(ProductsText::className(),['products_id'=>'id']);
    }*/

    public static function getProductsType()
    {

        $productsType = ProductsType::find()->asArray()->all();
        $productsType = ArrayHelper::map($productsType, 'id', 'name');
        array_unshift($productsType, 0);
        return $productsType;
    }

    public static function getProductsTypeSecond()
    {

        $productsType = ProductsTypeSecond::find()->asArray()->all();
        $productsType = ArrayHelper::map($productsType, 'id', 'name');
        array_unshift($productsType, 0);
        return $productsType;
    }

    public function getImages()
    {
        return $this->hasMany(Images::class, ['itemId' => 'id'])
            ->alias('img')
            ->orderBy('img.sort ASC');
    }

    public function getAllImages($id)
    {
        return $getAllImages = Images::find()->asArray()->andWhere(['itemId' => $id])->all();

    }

    public function getProductsTextId()
    {
        return $this->hasMany(ProductsText::className(), ['products_id' => 'id']);
    }

    public function getProductsText()
    {
        return $this->hasMany(ProductsText::className(), ['products_id' => 'id']);
    }

    public function getLanguages()
    {
        return $this->hasMany(Languages::className(), ['id' => 'languages_id'])->via('productsText');
    }

    public function translateButtons($model)
    {

        $text = '';
        $allLanguages = ArrayHelper::map(Languages::getAllLanguages(), 'id', 'url');
        $allLanguagesInverse = ArrayHelper::map(Languages::getAllLanguages(), 'url', 'id');
        $onLanguages = ArrayHelper::map($model->languages, 'url', 'id');
        $onPagesText = ArrayHelper::map($model->productsTextId, 'languages_id', 'id');

        foreach ($allLanguages as $one) {


            if (isset($onLanguages[$one])) {

                $text .= '<a class="btn btn-success" href="/products-text/update?id=' . $onPagesText[$onLanguages[$one]] . '&languages=' . $onLanguages[$one] . '&products=' . $model->id . '"><span class="fa fa-check"></span> ' . $one . ' </a> ';

            } else {

                $text .= '<a class="btn btn-primary" href="/products-text/create?languages=' . $allLanguagesInverse[$one] . '&products=' . $model->id . '"><span class="fa fa-times"></span> ' . $one . ' </a> ';
            }

        }

        return $text;

    }


    public function upload()
    {
        //(new \common\components\dump\Dump())->printR('aewfawefaew');
        //if ($this->validate()){
            $path = \Yii::getAlias('@uploadedfilesdir') . '/web/files/images/store/' . $this->image->baseName . '.' . $this->image->extension;
            (new \common\components\dump\Dump())->printR($path);

            $this->image->saveAs($path);
            //$this->attachImage($path);
            //die;
            return true;

        //} else {

        //    return false;

        //}


    }


}
