<?php

use Illuminate\Database\Seeder;
use seeNameSpace\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>  'Danilo Bezerra da Silva',
            'email'     =>  'daniloocc@gmail.com',
            'password'  =>  bcrypt('123456'),
            'image'     =>  'foto_app_admin.jpg',
        ]);

        User::create([
            'name'      =>  'O Outro Usuário',
            'email'     =>  'usuario@gmail.com',
            'password'  =>  bcrypt('123456'),
            'image'     =>  'foto_app_admin.jpg',
        ]);
    }
}
