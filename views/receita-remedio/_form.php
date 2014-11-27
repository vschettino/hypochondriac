<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReceitaRemedio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receita-remedio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medico_id')->dropDownList(
        ArrayHelper::map(\app\models\Medico::find()->all(), 'id', 'nome')
    ); ?>
    <?= $form->field($model, 'remedio_id')->dropDownList(
        ArrayHelper::map(\app\models\Remedio::find()->all(), 'id', 'nome')
    ); ?>

    <?= $form->field($model, 'dose')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'horario')->input('time') ?>

    <?= $form->field($model, 'vezes')->input('number') ?>

    <?= $form->field($model, 'dt_recomendacao')->input('date') ?>

    <?= $form->field($model, 'obs')->textarea(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton(
            $model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
