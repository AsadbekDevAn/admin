<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Zakaz;

/**
 * ZakazSearch represents the model behind the search form of `app\models\Zakaz`.
 */
class ZakazSearch extends Zakaz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','soni', 'narx'], 'integer'],
            [['umumiy'], 'number'],  
            [['tnomi_id','xona_id'], 'safe'],
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
        $query->joinWith('tnomi');
        $query->joinWith('xona')->joinWith('buyurtma');
        
        $query->andFilterWhere([
            'id' => $this->id,
            // 'tnomi_id' => $this->tnomi_id,
            'soni' => $this->soni,
            'narx' => $this->narx,
            // 'xona_id' => $this->xona_id,
            'umumiy' => $this->umumiy,
        ]);
        $query->andFilterWhere(['like','Menu.tnomi',$this->tnomi_id,])
        ->andFilterWhere(['like','xona.xnomi',$this->xona_id,]);

        return $dataProvider;
    }
}
