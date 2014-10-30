<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
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

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Tipo</th>
                        <th>Local</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="warning">
                        <td>03/11/2014</td>
                        <td>14:30</td>
                        <td>Consulta - Cargiologista</td>
                        <td>Dr. Jacson Ribeiro</td>
                    </tr>
                    <tr class="">
                        <td>06/11/2014</td>
                        <td>08:15</td>
                        <td>Nutricionista</td>
                        <td>Dra. Patrícia Pillar</td>
                    </tr>
                    <tr class="">
                        <td>06/11/2014</td>
                        <td>09:15</td>
                        <td>Exame - ECG</td>
                        <td>Clínica Imagem</td>
                    </tr>
                    <tr class="">
                        <td>25/11/2014</td>
                        <td>13:00</td>
                        <td>Consulta - Neurologista</td>
                        <td>Dr. Vagner Moura</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-6">
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
                    <tr class="">
                        <td>08:15</td>
                        <td>Sonrisal</td>
                        <td>15 Gotas</td>
                        <td>Dra. Patrícia Pillar</td>
                    </tr>
                    <tr class="danger" title="Últimas Unidades!">
                        <td>08:15</td>
                        <td>Dorflex</td>
                        <td>144mg (3 comprimidos)</td>
                        <td>Dr. Jacson Ribeiro</td>
                    </tr>

                    <tr class="">
                        <td>12:30</td>
                        <td>Engov</td>
                        <td>2 Comprimidos</td>
                        <td>Dr. Vagner Moura</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Últimos Gastos</h2>

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Tipo</th>
                        <th style="width: 50%">Descrição</th>
                        <th>Valor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="success">
                        <td>10/10/2014</td>
                        <td>Consulta</td>
                        <td>Cargiologista Dr. Jacson Ribeiro</td>
                        <td>R$400,00</td>
                    </tr>
                    <tr class="danger">
                        <td>13/10/2014</td>
                        <td>Consulta</td>
                        <td>Nutricionista Dra. Patrícia Pillar - Pediu para pagar por transferência</td>
                        <td>R$200,00</td>
                    </tr>
                    <tr class="danger">
                        <td>15/10/2014</td>
                        <td>Exame Laboratorial</td>
                        <td>ECG completo padrão OIT com contraste - Clínica Imagem</td>
                        <td>R$350,00</td>
                    </tr>
                    <tr class="success">
                        <td>18/10/2014</td>
                        <td>Consulta</td>
                        <td>Cargiologista Dr. Jacson Ribeiro</td>
                        <td>R$400,00</td>
                    </tr>
                    <tr class="danger">
                        <td>15/10/2014</td>
                        <td>Medicamento</td>
                        <td>Omeprazol - Cápsulas de liberação retardada de 10 mg - Embalagem com 14 cápsulas</td>
                        <td>R$750,00</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr class="">
                        <td><b>Total</b></td>
                        <td><b></b></td>
                        <td><b></b></td>
                        <td><b>R$2.050,00</b></td>
                    </tr>

                    </tfoot>
                </table>
            </div>
        </div>


    </div>
</div>
