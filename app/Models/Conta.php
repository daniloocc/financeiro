<?php

namespace seeNameSpace\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Conta extends Model
{
    protected $fillable = [
        'descricao', 'saldo','cor','mostra_tela_principal',
    ];

    public $timestamps = true;

    public function criarConta(float $saldo, string $descricao, string $cor, bool $mostra ): Array
    {
        DB::beginTransaction();

        $conta = auth()->user()->contas()->create([
            'descricao'             => $descricao,
            'saldo'                 => $saldo,
            //'id_user'               => auth()->user()->id,
            'user_id'               => auth()->user()->id,
            'cor'                   => $cor,
            'mostra_tela_principal' => $mostra,

        ]);



        if($conta)
        {
            DB::commit();
            return [
                'success' => true,
                'message' => 'Sucesso ao criar conta'
            ];
        }else{
            DB::rollBack();
            return [
                'success' => false,
                'message' => 'Falha criar conta'
            ];

        }



    }

    public static function conta($conta = null)
    {

        if(!$conta)
            return DB::table('contas')
                ->select('id', 'descricao')
                ->orderBy('mostra_tela_principal','descricao')
                ->get()
                ->toArray();

        return DB::table('contas')
            ->select('id', 'descricao')
            ->where('id', $conta)
            ->get();
    }
}
