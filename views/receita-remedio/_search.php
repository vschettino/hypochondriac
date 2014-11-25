<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReceitaRemedioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receita-remedio-search">

    <?php $form = ActiveForm::begin(
        [
            'action' => ['index'],
            'method' => 'get',
        ]
    ); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'medico_id') ?>

    <?= $form->field($model, 'obs') ?>

    <?= $form->field($model, 'remedio_id') ?>

    <?= $form->field($model, 'dose') ?>

    <?php // echo $form->field($model, 'horario') ?>

    <?php // echo $form->field($model, 'vezes') ?>

    <?php // echo $form->field($model, 'dt_recomendacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
