<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsultaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consultas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consulta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Consulta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget(
        [
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'data:date',
                'hora:time',
                'preco',
//                'descricao',
                'medico.nome',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]
    ); ?>

</div>
