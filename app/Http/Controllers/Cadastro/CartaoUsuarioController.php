<?php

namespace seeNameSpace\Http\Controllers\Cadastro;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use seeNameSpace\Http\Controllers\Controller;
use seeNameSpace\Http\Requests\CartaoUsuarioFormRequest;
use seeNameSpace\Models\Cartao;
use seeNameSpace\Models\CartaoUsuario;
use seeNameSpace\Models\Conta;

class CartaoUsuarioController extends Controller
{
    public function preparaCadastro()
    {
        $contas = auth()->user()->contas;
        $cartoes = Cartao::all()->where('ativo', true);
        //dd($contas);
        return view('cadastro.cartao', compact('contas', 'cartoes'));
    }

    public function cadastra(CartaoUsuarioFormRequest $request)
    {

        $response = new CartaoUsuario();
        $response = $response->cadastra($request);


        if($response['success']){
            return redirect()
                ->route('novo.usuariocategoria')
                ->with('success', $response['message']);
        }

        return redirect()
            ->back()
            ->with('error', $response['message']);
    }
}
