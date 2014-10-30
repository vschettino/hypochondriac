<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medico".
 *
 * @property integer $id
 * @property string $nome
 * @property string $cpf
 * @property string $telefone
 * @property string $email
 * @property string $crm
 * @property integer $clinica_id
 *
 * @property Clinica $clinica
 */
class Medico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'crm'], 'required'],
            [['clinica_id'], 'integer'],
            [['nome'], 'string', 'max' => 100],
            [['cpf'], 'string', 'max' => 11],
            [['telefone'], 'string', 'max' => 20],
            [['email', 'crm'], 'string', 'max' => 255],
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
            'cpf' => 'Cpf',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'crm' => 'Registro CRM',
            'clinica_id' => 'Clinica ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClinica()
    {
        return $this->hasOne(Clinica::className(), ['id' => 'clinica_id']);
    }
}
