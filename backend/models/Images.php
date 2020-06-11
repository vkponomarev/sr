<?php

namespace app\models;

use Yii;

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
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
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
}
