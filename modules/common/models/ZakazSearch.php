<?php

namespace app\modules\common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\common\models\Zakaz;

/**
 * ZakazSearch represents the model behind the search form of `app\modules\common\models\Zakaz`.
 */
class ZakazSearch extends Zakaz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_spisok_books', 'adress_dostavki', 'id_samovivoza', 'id_sposob_polucheniya', 'id_sposob_oplati', 'price', 'id_status'], 'integer'],
            [['data_zakaza', 'data_predpolag_dostavki'], 'safe'],
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
        $query = Zakaz::find();

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
            'id_user' => $this->id_user,
            'id_spisok_books' => $this->id_spisok_books,
            'adress_dostavki' => $this->adress_dostavki,
            'id_samovivoza' => $this->id_samovivoza,
            'data_zakaza' => $this->data_zakaza,
            'data_predpolag_dostavki' => $this->data_predpolag_dostavki,
            'id_sposob_polucheniya' => $this->id_sposob_polucheniya,
            'id_sposob_oplati' => $this->id_sposob_oplati,
            'price' => $this->price,
            'id_status' => $this->id_status,
        ]);

        return $dataProvider;
    }
}
