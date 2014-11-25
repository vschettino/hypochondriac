<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReceitaRemedio;

/**
 * ReceitaRemedioSearch represents the model behind the search form about `app\models\ReceitaRemedio`.
 */
class ReceitaRemedioSearch extends ReceitaRemedio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'medico_id', 'remedio_id', 'vezes'], 'integer'],
            [['obs', 'dose', 'horario', 'dt_recomendacao'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ReceitaRemedio::find();

        $dataProvider = new ActiveDataProvider(
            [
                'query' => $query,
            ]
        );

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(
            [
                'id' => $this->id,
                'medico_id' => $this->medico_id,
                'remedio_id' => $this->remedio_id,
                'horario' => $this->horario,
                'vezes' => $this->vezes,
                'dt_recomendacao' => $this->dt_recomendacao,
            ]
        );

        $query->andFilterWhere(['like', 'obs', $this->obs])
            ->andFilterWhere(['like', 'dose', $this->dose]);

        return $dataProvider;
    }
}
