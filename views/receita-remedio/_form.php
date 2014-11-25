<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReceitaRemedio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receita-remedio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medico_id')->textInput() ?>

    <?= $form->field($model, 'obs')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'remedio_id')->textInput() ?>

    <?= $form->field($model, 'dose')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'horario')->textInput() ?>

    <?= $form->field($model, 'vezes')->textInput() ?>

    <?= $form->field($model, 'dt_recomendacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(
            $model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
