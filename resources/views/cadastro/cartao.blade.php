@extends('adminlte::page')

@section('title', 'Novo Cartão')

@section('content_header')
    <h1>Cadastro de cartão</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Cartões</a></li>
        <li><a href="">Novo Cartão</a></li>
    </ol>
@stop


@section('content')
    @include('includes.alerts')

    <form action="{{route('cadastra.usuariocartao')}}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" class="form-control" placeholder="Nome da Cartão" required>
        </div>

        <div class="form-group">
            <label for="limite">Limite: </label>
            <input type="number" step="0.01" name="limite" class="form-control" placeholder="R$ 0,00" required>
        </div>

        <div class="form-group">
            <label for="fechamento">Dia do fechamento: </label>
            <input type="number" step="1" max="31" min="0" name="fechamento" class="form-control" placeholder="0" required>
        </div>

        <div class="form-group">
            <label for="vencimento">Dia de pagamento: </label>
            <input type="number" step="1" max="31" min="0" name="vencimento" class="form-control" placeholder="0" required>
        </div>

        <div class="form-group">
            <label for="bandeira">Bandeira</label>
            <select name="bandeira" class="form-control" required>
                <option value="">-- Selecione a Bandeira --</option>
                @foreach($cartoes as $cartao)
                    <option value="{{$cartao->id}}">{{$cartao->bandeira}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="conta">Conta Vinculada</label>
            <select name="conta" class="form-control" required>
                <option value="">-- Selecione a Conta --</option>
                @foreach($contas as $conta)
                    <option value="{{$conta->id}}">{{$conta->descricao}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </div>

    </form>

@stop