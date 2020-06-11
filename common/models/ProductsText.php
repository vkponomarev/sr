<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products_text".
 *
 * @property int $id
 * @property int $products_id
 * @property int $languages_id
 * @property string|null $title
 * @property string|null $h1
 * @property string|null $description
 * @property string|null $text1
 * @property string|null $text2
 * @property int $active
 */
class ProductsText extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products_text';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['products_id', 'languages_id', 'active'], 'required'],
            [['products_id', 'languages_id', 'active'], 'integer'],
            [['text1', 'text2'], 'string'],
            [['title', 'h1', 'description', 'plates_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'products_id' => 'Products ID',
            'languages_id' => 'Languages ID',
            'title' => 'Title',
            'h1' => 'H1',
            'plates_title' => 'plates_title',
            'description' => 'Description',
            'text1' => 'Text1',
            'text2' => 'Text2',
            'active' => 'Active',
        ];
    }
}
