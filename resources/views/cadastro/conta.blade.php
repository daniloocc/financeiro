@extends('adminlte::page')

@section('title', 'Nova Conta')

@section('content_header')
    <h1>Cadastro de conta</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Contas</a></li>
        <li><a href="">Nova Conta</a></li>
    </ol>
@stop


@section('content')
    @include('includes.alerts')

    <form action="{{route('cadastra.conta')}}" method="post">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="nome">Descrição: </label>
            <input type="text" name="nome" class="form-control" placeholder="Nome da Conta" required>
        </div>

        <div class="form-group">
            <label for="saldo">Saldo: </label>
            <input type="number" step="0.01" name="saldo" class="form-control" placeholder="R$ 0,00" required>
        </div>

        <div class="form-group">
            <label for="cor">Cor: </label>
            <input id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" name="cor" value="#cccccc" style="width:50px;" type="color" class="form-control">
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="mostrar" checked> Mostrar soma na tela inicial
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </div>

    </form>



@stop