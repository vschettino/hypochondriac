<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Consulta;

/**
 * ConsultaSearch represents the model behind the search form about `app\models\Consulta`.
 */
class ConsultaSearch extends Consulta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'medico_id'], 'integer'],
            [['data', 'data_fim', 'descricao'], 'safe'],
            [['preco'], 'number'],
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
        $query = Consulta::find();

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
                'data' => $this->data,
                'data_fim' => $this->data_fim,
                'preco' => $this->preco,
                'medico_id' => $this->medico_id,
            ]
        );

        $query->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
