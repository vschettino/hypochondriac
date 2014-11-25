<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReceitaRemedio */

$this->title = 'Create Receita Remedio';
$this->params['breadcrumbs'][] = ['label' => 'Receita Remedios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receita-remedio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form',
        [
            'model' => $model,
        ]
    ) ?>

</div>
