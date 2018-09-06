<?php

namespace seeNameSpace\Http\Controllers\Cadastro;

use Illuminate\Http\Request;
use seeNameSpace\Http\Controllers\Controller;
use seeNameSpace\Models\Categoria;
use seeNameSpace\Models\TipoHistorico;

class CategoriaController extends Controller
{
    public function preparaCadastro()
    {
        $historicos = TipoHistorico::all();

        return view('cadastro.categoria', compact('historicos'));
    }

    public function cadastra(Request $request)
    {
        //dd($request->all());
        //dd(auth()->user()->categorias);

        $response = new Categoria();
        $response = $response->cadastra($request);


        if($response['success']){
            return redirect()
                ->route('nova.categoria')
                ->with('success', $response['message']);
        }

        return redirect()
            ->back()
            ->with('error', $response['message']);

    }
}
