<?php

namespace app\modules\ts\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\ts\models\Prodi;

/**
 * ProdiSearch represents the model behind the search form of `app\modules\ts\models\Prodi`.
 */
class ProdiSearch extends Prodi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prodi'], 'integer'],
            [['jurusan', 'prodi', 'jenjang', 'prodi_p'], 'safe'],
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
        $query = Prodi::find();

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
            'id_prodi' => $this->id_prodi,
        ]);

        $query->andFilterWhere(['ilike', 'jurusan', $this->jurusan])
            ->andFilterWhere(['ilike', 'prodi', $this->prodi])
            ->andFilterWhere(['ilike', 'jenjang', $this->jenjang])
            ->andFilterWhere(['ilike', 'prodi_p', $this->prodi_p]);

        return $dataProvider;
    }
}
