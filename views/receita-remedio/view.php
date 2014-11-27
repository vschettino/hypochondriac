<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ReceitaRemedio */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Receita Remedios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receita-remedio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(
            'Delete',
            ['delete', 'id' => $model->id],
            [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]
        ) ?>
    </p>

    <?= DetailView::widget(
        [
            'model' => $model,
            'attributes' => [
                'id',
                'medico.nome',
                'obs',
                'remedio.nome',
                'dose',
                'horario:time',
                'vezes',
                'dt_recomendacao:date',
            ],
        ]
    ) ?>

</div>
