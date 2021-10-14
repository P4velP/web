<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Readers;

/**
 * ReadersSearch represents the model behind the search form of `app\models\Readers`.
 */
class ReadersSearch extends Readers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Jmeno', 'Prijmeni', 'Rok_narozeni', 'Ulice', 'Mesto'], 'safe'],
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
        $query = Readers::find();

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
            'Rok_narozeni' => $this->Rok_narozeni,
        ]);

        $query->andFilterWhere(['like', 'Jmeno', $this->Jmeno])
            ->andFilterWhere(['like', 'Prijmeni', $this->Prijmeni])
            ->andFilterWhere(['like', 'Ulice', $this->Ulice])
            ->andFilterWhere(['like', 'Mesto', $this->Mesto]);

        return $dataProvider;
    }
}
