<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "remedio".
 *
 * @property integer $id
 * @property string $nome
 * @property string $descricao
 * @property double $preco
 *
 * @property ReceitaRemedio[] $receitaRemedios
 */
class Remedio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'remedio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['preco'], 'number'],
            [['nome', 'descricao'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'preco' => 'Preco',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceitaRemedios()
    {
        return $this->hasMany(ReceitaRemedio::className(), ['remedio_id' => 'id']);
    }
}
