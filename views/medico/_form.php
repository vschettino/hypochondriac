<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Medico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'crm')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'clinica_id')->dropDownList(
        ArrayHelper::map(\app\models\Clinica::find()->all(), 'id', 'nome')
    ); ?>

    <div class="form-group">
        <?= Html::submitButton(
            $model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
