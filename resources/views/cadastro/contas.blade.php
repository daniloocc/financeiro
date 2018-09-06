@extends('adminlte::page')

@section('title', 'Nova Conta')

@push('css')
    <style>
        .info-box span{
            color: #000;
            text-shadow: 2px 2px 2px rgba(150, 150, 150, 1);
            -webkit-text-stroke-width: 0.07px; /* largura da borda */
            -webkit-text-stroke-color: #fff; /* cor da borda */
        }

        .info-box-icon {
            box-shadow: 0px 10px #888888;
        }
    </style>
@endpush

@section('content_header')
    <h1>Contas</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Contas</a></li>
    </ol>
@stop


@section('content')

    <div class="row">
        <div class="col-lg-6">
            <div class="box-header">
                <a href="{{ route('nova.conta') }}" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Nova Conta</a>
            </div>
            <div class="box-body">
                @include('includes.alerts')
            </div>
        </div>
    </div>

    <div class="row">
    @foreach($contas as $conta)
        <div class="col-lg-4">
            <div class="info-box" style="background-color: {{$conta->cor}}">
                    <span class="info-box-icon"><i class="fa fa-university "></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">{{$conta->descricao}}</span>
                        <span class="info-box-number"><small >R$</small> {{number_format($conta->saldo, 2, ',','')}}</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: {{($conta->saldo / $maior)*100}}%"></div>
                        </div>
                        <span class="progress-description">
                            {{number_format((floatval($conta->saldo / $soma)*100)), 2, ',', ''}}% da renda total
                        </span>
                        <span class="progress-description right">
                            <button type="button" class="btn btn-defaut btn-xs"><i class="fa fa-edit"></i> Editar</button>
                            <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</button>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
            </div>
        </div>

    @endforeach
    </div>


@stop