<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clinica;

/**
 * ClinicaSearch represents the model behind the search form about `app\models\Clinica`.
 */
class ClinicaSearch extends Clinica
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'analise_clinica'], 'integer'],
            [['nome', 'telefone', 'email'], 'safe'],
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
        $query = Clinica::find();

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
                'analise_clinica' => $this->analise_clinica,
            ]
        );

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
