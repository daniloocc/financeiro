<?php

namespace seeNameSpace\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class Categoria extends Model
{
    protected $fillable = [
        'descricao',
        'cor',
        'id_tipo_historico',
    ];


    public $timestamps = true;

    public function cadastra(Request $request)
    {
        //dd($request->all());
        DB::beginTransaction();

        $categoria = auth()->user()->categorias()->create([
            'descricao'         => $request->descricao,
            'cor'               => $request->cor,
            'id_tipo_historico' => $request->historico,
            'user_id'           => auth()->user()->id,
        ]);

        if($categoria)
        {
            DB::commit();
            return [
                'success' => true,
                'message' => 'Sucesso ao cadastrar'
            ];
        }else{
            DB::rollBack();
            return [
                'success' => false,
                'message' => 'Falha ao cadastrar'
            ];
        }
    }

}
