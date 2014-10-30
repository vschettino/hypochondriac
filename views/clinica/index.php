<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClinicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clinicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinica-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Clinica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget(
        [
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'nome',
                'telefone',
                'email:email',
                'analise_clinica',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]
    ); ?>

</div>
