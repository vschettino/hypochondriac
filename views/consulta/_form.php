<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Consulta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consulta-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'data')->input('date') ?>
    <?= $form->field($model, 'hora')->input('time') ?>


    <?= $form->field($model, 'preco')->textInput() ?>

    <?= $form->field($model, 'descricao')->textarea(['maxlength' => 255]) ?>

    <?= $form->field($model, 'medico_id')->dropDownList(
        ArrayHelper::map(\app\models\Medico::find()->all(), 'id', 'nome')
    ); ?>

    <div class="form-group">
        <?= Html::submitButton(
            $model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
