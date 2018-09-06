<?php

namespace seeNameSpace\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use seeNameSpace\Http\Requests\CartaoUsuarioFormRequest;

class CartaoUsuario extends Model
{

    protected $fillable = [
        'descricao',
        'limite',
        'fechamento',
        'vencimento',
        'id_cartao',
        'id_conta',
    ];

    public $timestamps = true;

    public function cadastra(CartaoUsuarioFormRequest $request)
    {
        //dd($request->all());
        DB::beginTransaction();

        $cartao = auth()->user()->cartoes()->create([
            'id_cartao'         => $request->bandeira,
            'descricao'         => $request->descricao,
            'limite'            => $request->limite,
            'fechamento'        => $request->fechamento,
            'vencimento'        => $request->vencimento,
            'id_conta'          => $request->conta,
            'user_id'           => auth()->user()->id,
            //'id_user'           => auth()->user()->id,
        ]);

        if($cartao)
        {
            DB::commit();
            return [
                'success' => true,
                'message' => 'Sucesso ao recarregar'
            ];
        }else{
            DB::rollBack();
            return [
                'success' => false,
                'message' => 'Falha ao recarregar'
            ];
        }

    }

}
