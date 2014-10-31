<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clinica".
 *
 * @property integer $id
 * @property string $nome
 * @property string $telefone
 * @property string $email
 * @property integer $analise_clinica
 *
 * @property Medico[] $medicos
 */
class Clinica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clinica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'analise_clinica'], 'required'],
            [['analise_clinica'], 'integer'],
            [['nome'], 'string', 'max' => 100],
            [['telefone'], 'string', 'max' => 20],
            [['email'], 'email']
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
            'telefone' => 'Telefone',
            'email' => 'Email',
            'analise_clinica' => 'Analise Clinica?',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicos()
    {
        return $this->hasMany(Medico::className(), ['clinica_id' => 'id']);
    }
}
