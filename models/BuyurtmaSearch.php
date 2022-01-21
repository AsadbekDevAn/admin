<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Buyurtma;

/**
 * BuyurtmaSearch represents the model behind the search form of `app\models\Buyurtma`.
 */
class BuyurtmaSearch extends Buyurtma
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'xona_id'], 'integer'],
            [['ism', 'tel', 'kun'], 'safe'],
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
        $query = Buyurtma::find();

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
            'kun' => $this->kun,
            'xona_id' => $this->xona_id,
        ]);

        $query->andFilterWhere(['like', 'ism', $this->ism])
            ->andFilterWhere(['like', 'tel', $this->tel]);

        return $dataProvider;
    }
}
