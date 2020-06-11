<?php

namespace common\models;

use oxycoach\imagebehavior\ImageBehavior;


/**
 * This is the model class for table "images".
 *
 * @property int $id
 * @property int $itemId
 * @property string|null $path
 * @property string|null $extension
 * @property int $sort
 */
class Images extends \yii\db\ActiveRecord
{

    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    public function behaviors()
    {
        return [
            'ImageBehavior' => [
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['itemId'], 'required'],
            [['itemId', 'sort'], 'integer'],
            [['path', 'extension'], 'string', 'max' => 255],
            [['file'], 'file', 'extensions' => ['png', 'jpg', 'jpeg', 'gif'], 'maxSize' => 1024 * 1024 * 1024, 'maxFiles' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'itemId' => 'Item ID',
            'path' => 'Path',
            'extension' => 'Extension',
            'sort' => 'Sort',
        ];
    }


    public function getImages()
    {
        return $this->hasMany(Images::class, ['itemId' => 'id'])
            ->alias('img')
            ->orderBy('img.sort ASC');
    }


}
