<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Medico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget(
        [
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'nome',
                'cpf',
                'telefone',
                'email:email',
                // 'crm',
                // 'clinica_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]
    ); ?>

</div>
