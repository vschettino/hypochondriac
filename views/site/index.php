<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use yii\i18n\formatter;

function getclassTr($diff)
{
    if ($diff <= 0) {
        return 'danger';
    } else {
        if ($diff <= 3) {
            return 'alert';
        }
    }
    return '';
}

$f = Yii::$app->formatter;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Bem-vindo!</h1>

        <p class="lead">Painel de Controle</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Próximos Compromissos</h2>
                <?php
                $consultas = app\models\Consulta::find()
                    ->where('data >= ' . date('Y-m-d'))
                    ->select(['*', "DATEDIFF(data," . date('Y-m-d') . ") AS diff"])
                    ->indexBy('id')->joinWith('medico')
                    ->limit(6)->asArray()
                    ->all();
                ?>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Tipo</th>
                        <th>Médico</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($consultas as $consulta) {
                        echo Html::beginTag('tr', ['class' => getclassTr($consulta['diff'])]);
                        echo "<td>" . $f->asDate($consulta['data']) . "</td>";
                        echo "<td>" . $f->asTime($consulta['hora']) . "</td>";
                        echo "<td>" . $consulta['descricao'] . "</td>";
                        echo "<td>" . $consulta['nome'] . "</td>";
                        echo Html::endTag('tr');
                    }
                    ?>

                    </tbody>
                </table>
            </div>

            <div class="col-lg-6">
                <?php
                $remedios = app\models\ReceitaRemedio::find()
                    ->select('*')
                    ->where("DATE_ADD(dt_recomendacao, INTERVAL vezes DAY) >= " . date('Y-m-d'))
                    ->OrWhere("vezes IS NULL")
                    ->indexBy('id')->joinWith(['medico', 'remedio'])
                    ->asArray()
                    ->all();
                ?>
                <h2>Remédios de Hoje</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Nome</th>
                        <th>Dose</th>
                        <th>Médico</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($remedios as $remedio) {
                        echo Html::beginTag('tr');
                        echo "<td>" . $f->asDate($remedio['horario']) . "</td>";
                        echo "<td>" . ($remedio['remedio']['nome']) . "</td>";
                        echo "<td>" . $remedio['dose'] . "</td>";
                        echo "<td>" . $remedio['medico']['nome'] . "</td>";
                        echo Html::endTag('tr');
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Últimos Gastos com Consultas</h2>
                <?php
                $consultas = app\models\Consulta::find()
                    ->indexBy('id')->joinWith('medico')
                    ->limit(6)->asArray()
                    ->all();
                $v = 0;
                ?>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Hora</th>
                        <th style="width: 50%">Descrição</th>
                        <th>Médico</th>
                        <th>Valor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($consultas as $consulta) {
                        echo Html::beginTag('tr');
                        echo "<td>" . $f->asDate($consulta['data']) . "</td>";
                        echo "<td>" . $f->asTime($consulta['hora']) . "</td>";
                        echo "<td>" . $consulta['descricao'] . "</td>";
                        echo "<td>" . $consulta['medico']['nome'] . "</td>";
                        echo "<td>R$" . $consulta['preco'] . "</td>";
                        $v += $consulta['preco'];
                        echo Html::endTag('tr');
                    }
                    ?>

                    </tbody>
                    <tfoot>
                    <tr class="">
                        <td><b>Total</b></td>
                        <td><b></b></td>
                        <td><b></b></td>
                        <td><b></b></td>
                        <td><b>R$<?= $v ?></b></td>
                    </tr>

                    </tfoot>
                </table>
            </div>
        </div>


    </div>
</div>
