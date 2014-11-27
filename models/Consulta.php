<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consulta".
 *
 * @property integer $id
 * @property string $data
 * @property double $preco
 * @property string $descricao
 * @property integer $medico_id
 *
 * @property Medico $medico
 */
class Consulta extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consulta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data', 'medico_id'], 'required'],
            [['data', 'hora'], 'safe'],
            [['preco'], 'number'],
            [['medico_id'], 'integer'],
            [['descricao'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'hora' => 'Hora',
            'preco' => 'Preco',
            'descricao' => 'Descrição',
            'medico_id' => 'Médico',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedico()
    {
        return $this->hasOne(Medico::className(), ['id' => 'medico_id']);
    }
}
