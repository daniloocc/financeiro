<?php

use Illuminate\Database\Seeder;
use seeNameSpace\Models\Conta;

class ContasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conta::create([
            'descricao'         => 'Banco do Brasil',
            'saldo'             => 1500,
            'cor'               => '#287233',
            //'id_user'           => 1,
            'user_id'           => 1,
            'mostra_tela_principal' => 1,
        ]);

        Conta::create([
            'descricao'         => 'Carteira',
            'saldo'             => 150,
            'cor'               => '#287200',
            //'id_user'           => 1,
            'user_id'           => 1,
            'mostra_tela_principal' => 1,
        ]);

        Conta::create([
            'descricao'         => 'Ajustes',
            'saldo'             => 18000,
            'cor'               => '#ff7233',
            //'id_user'           => 1,
            'user_id'           => 1,
            'mostra_tela_principal' => 0,
        ]);
    }
}
