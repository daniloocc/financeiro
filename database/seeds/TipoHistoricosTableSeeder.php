<?php

use Illuminate\Database\Seeder;
use \seeNameSpace\Models\TipoHistorico;

class TipoHistoricosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoHistorico::create([
            'descricao' => 'Receita',
            'sigla'     => 'R',
        ]);

        TipoHistorico::create([
            'descricao' => 'Despesa',
            'sigla'     => 'D',
        ]);

        TipoHistorico::create([
            'descricao' => 'Despesa Cartão',
            'sigla'     => 'DC',
        ]);

        TipoHistorico::create([
            'descricao' => 'Estorno Cartão',
            'sigla'     => 'EC',
        ]);

        TipoHistorico::create([
            'descricao' => 'Transferencia',
            'sigla'     => 'T',
        ]);
    }
}
