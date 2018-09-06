@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <!-- Medalhas resumo -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><small>R$</small> 150,00</h3>

                    <p>Saldo Atual</p>
                </div>
                <div class="icon">
                    <i class="fa fa-home"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><small>R$</small> 53,00</h3>

                    <p>Receitas</p>
                </div>
                <div class="icon">
                    <i class="fa fa-arrow-circle-up"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><small>R$</small> 44,00</h3>

                    <p>Despesas</p>
                </div>
                <div class="icon">
                    <i class="fa fa-arrow-circle-down"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><small>R$</small> 65,00</h3>

                    <p>Cartão de crédito</p>
                </div>
                <div class="icon">
                    <i class="fa fa-credit-card"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- FIM Medalhas resumo -->

    <!-- GRAFICO DE RECEITAS -->
    <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Receitas do mês</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="chart-responsive">
                                <canvas id="chartReceitas" height="165" width="259" style="width: 259px; height: 165px;"></canvas>
                            </div>
                            <!-- ./chart-responsive -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Salário
                                <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                        <li><a href="#">Doações <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                        </li>
                        <li><a href="#">Aluguel
                                <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                    </ul>
                </div>
                <!-- /.footer -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Despesas do mês</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="chart-responsive">
                                <canvas id="chartDespesas" height="165" width="259" style="width: 259px; height: 165px;"></canvas>
                            </div>
                            <!-- ./chart-responsive -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="#">Doações
                                <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                        <li><a href="#">Alimentação <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                        </li>
                        <li><a href="#">Combustível
                                <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                    </ul>
                </div>
                <!-- /.footer -->
            </div>
        </div>
    </div>
    <!-- FIM GRAFICO DE RECEITAS E DESPESAS -->

@stop

@push('js')
<script>

    var ctx = document.getElementById("chartReceitas").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Aluguel", "Salario", "Doações", "Lucro"],
            datasets: [{
                label: '# of Votes',
                data: [12.0, 19.55, 3.8, 5,],
                backgroundColor: [
                    'rgba(221, 75, 57, 1)',
                    'rgba(0, 166, 90, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(0, 192, 239, 1)',
                ],
                borderColor: [
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Total: R$ 40.45',
            },
            legend: {
                position: 'right',
            }
        }
    });

    var ctx2 = document.getElementById("chartDespesas").getContext('2d');
    var myChart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ["Lazer", "Alimentação", "Doações", "Escola", "Combustível"],
            datasets: [{
                label: '# of Votes',
                data: [250.5, 500.00, 50.0, 350, 700],
                backgroundColor: [
                    'rgba(221, 75, 57, 1)',
                    'rgba(0, 166, 90, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(0, 192, 239, 1)',
                ],
                borderColor: [
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                    'rgba(255, 255, 255, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
              display: true,
                text: 'Total: R$ 1850.50',
            },
            legend: {
                position: 'right',
            }
        }
    });
</script>
@endpush