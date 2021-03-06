<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BpntModel;

/**
 * BpntSearch represents the model behind the search form of `app\models\BpntModel`.
 */
class BpntSearch extends BpntModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bpnt', 'nama', 'nik', 'alamat', 'kecamatan', 'kelurahan'], 'safe'],
            [['tahun'], 'integer'],
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
        $query = BpntModel::find();

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
            'tahun' => $this->tahun,
        ]);

        $query->andFilterWhere(['like', 'id_bpnt', $this->id_bpnt])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kelurahan', $this->kelurahan]);

        return $dataProvider;
    }
}
