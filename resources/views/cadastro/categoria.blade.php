@extends('adminlte::page')

@section('title', 'Nova Conta')

@section('content_header')
    <h1>Cadastro de Categoria</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Categorias</a></li>
        <li><a href="">Nova Categoria</a></li>
    </ol>
@stop


@section('content')
    @include('includes.alerts')

    <form action="{{route('cadastra.categoria')}}" method="post">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" class="form-control" placeholder="Nome da Categoria" required>
        </div>

        <div class="form-group">
            <label for="historico">Onde essa categoria será usada?</label>
            <select name="historico" class="form-control" required>
                <option value="">-- Selecione --</option>
                @foreach($historicos as $historico)
                    <option value="{{$historico->id}}">{{$historico->descricao}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cor">Cor: </label>
            <input id="html5colorpicker" name="cor" value="#cccccc" style="width:50px;" type="color" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </div>

    </form>



@stop