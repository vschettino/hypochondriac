<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Remedio */

$this->title = 'Create Remedio';
$this->params['breadcrumbs'][] = ['label' => 'Remedios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remedio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form',
        [
            'model' => $model,
        ]
    ) ?>

</div>
