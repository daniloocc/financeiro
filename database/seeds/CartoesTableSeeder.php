<?php

use Illuminate\Database\Seeder;
use seeNameSpace\Models\Cartao;

class CartoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cartao::create([
            'bandeira'         => 'Visa',
        ]);

        Cartao::create([
            'bandeira'         => 'Master Card',
        ]);

        Cartao::create([
            'bandeira'         => 'Dinners',
        ]);
    }
}
