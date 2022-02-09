<?php

namespace app\modules\common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\common\models\Otdel;

/**
 * OtdelSearch represents the model behind the search form of `app\modules\common\models\Otdel`.
 */
class OtdelSearch extends Otdel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_gorod'], 'integer'],
            [['name_otdeleniya', 'addres', 'tel'], 'safe'],
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
        $query = Otdel::find();

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
            'id_gorod' => $this->id_gorod,
        ]);

        $query->andFilterWhere(['like', 'name_otdeleniya', $this->name_otdeleniya])
            ->andFilterWhere(['like', 'addres', $this->addres])
            ->andFilterWhere(['like', 'tel', $this->tel]);

        return $dataProvider;
    }
}
