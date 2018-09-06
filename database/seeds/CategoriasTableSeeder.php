<?php

use Illuminate\Database\Seeder;
use \seeNameSpace\Models\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'descricao'         => 'Salário',
            'cor'               => '#287233',
            'id_tipo_historico' => 1,
            'user_id'           => 1,
        ]);

        Categoria::create([
            'descricao'         => 'Alimentação',
            'cor'               => '#FF0000',
            'id_tipo_historico' => 2,
            'user_id'           => 1,
        ]);
    }
}
