<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedicoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medico-search">

    <?php $form = ActiveForm::begin(
        [
            'action' => ['index'],
            'method' => 'get',
        ]
    ); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'cpf') ?>

    <?= $form->field($model, 'telefone') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'crm') ?>

    <?php // echo $form->field($model, 'clinica_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
