<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProductsText;

/**
 * ProductsTextSearch represents the model behind the search form of `common\models\ProductsText`.
 */
class ProductsTextSearch extends ProductsText
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'products_id', 'languages_id', 'active'], 'integer'],
            [['title', 'h1', 'description', 'text1', 'text2', 'plates_title'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProductsText::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'products_id' => $this->products_id,
            'languages_id' => $this->languages_id,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'h1', $this->h1])
            ->andFilterWhere(['like', 'plates_title', $this->h1])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'text1', $this->text1])
            ->andFilterWhere(['like', 'text2', $this->text2]);

        return $dataProvider;
    }
}
