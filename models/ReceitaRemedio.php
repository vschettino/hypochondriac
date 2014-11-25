<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receita_remedio".
 *
 * @property integer $id
 * @property integer $medico_id
 * @property string $obs
 * @property integer $remedio_id
 * @property string $dose
 * @property string $horario
 * @property integer $vezes
 * @property string $dt_recomendacao
 *
 * @property Medico $medico
 * @property Remedio $remedio
 */
class ReceitaRemedio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'receita_remedio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['medico_id', 'remedio_id', 'horario', 'dt_recomendacao'], 'required'],
            [['medico_id', 'remedio_id', 'vezes'], 'integer'],
            [['horario', 'dt_recomendacao'], 'safe'],
            [['obs', 'dose'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'medico_id' => 'Medico ID',
            'obs' => 'Obs',
            'remedio_id' => 'Remedio ID',
            'dose' => 'Dose',
            'horario' => 'Horario',
            'vezes' => 'Vezes',
            'dt_recomendacao' => 'Dt Recomendacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedico()
    {
        return $this->hasOne(Medico::className(), ['id' => 'medico_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemedio()
    {
        return $this->hasOne(Remedio::className(), ['id' => 'remedio_id']);
    }
}
