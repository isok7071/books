<?php

namespace app\modules\common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\common\models\Books;

/**
 * BooksSearch represents the model behind the search form of `app\modules\common\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'parent_book_id', 'id_lang', 'id_izd', 'id_format', 'kolvoStr', 'price', 'id_pereplet'], 'integer'],
            [['name', 'oblojka', 'ISBN13', 'god_izdaniya'], 'safe'],
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
        $query = Books::find();

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
            'parent_book_id' => $this->parent_book_id,
            'id_lang' => $this->id_lang,
            'id_izd' => $this->id_izd,
            'id_format' => $this->id_format,
            'kolvoStr' => $this->kolvoStr,
            'price' => $this->price,
            'id_pereplet' => $this->id_pereplet,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'oblojka', $this->oblojka])
            ->andFilterWhere(['like', 'ISBN13', $this->ISBN13])
            ->andFilterWhere(['like', 'god_izdaniya', $this->god_izdaniya]);

        return $dataProvider;
    }
}
