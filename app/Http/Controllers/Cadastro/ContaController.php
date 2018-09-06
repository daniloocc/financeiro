<?php

namespace seeNameSpace\Http\Controllers\Cadastro;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use seeNameSpace\Http\Controllers\Controller;
use seeNameSpace\Http\Requests\DinheiroFormRequest;
use seeNameSpace\Models\Conta;

class ContaController extends Controller
{
    public function listarContas()
    {
        $contas = auth()->user()->contas;
        //dd($contas->all());

        // salva o maior valor das contas para mostrar a porcentagem
        $maior = $contas->max('saldo');
        $soma = $contas->sum('saldo');

        return view('cadastro.contas', compact('contas', 'maior', 'soma'));
    }

    public function preparaCadastro()
    {
        return view('cadastro.conta');
    }

    public function cadastra(DinheiroFormRequest $request)
    {
        //dd($request->all());

        $conta = new Conta();

        $response = $conta->criarConta($request->saldo, $request->nome, $request->cor, isset($request->mostrar) );

        if($response['success']){
            return redirect()
                ->route('ver.contas')
                ->with('success', $response['message']);
        }

        return redirect()
            ->back()
            ->with('error', $response['message']);
    }
}
