<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->double('saldo', 8, 2);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->integer('id_user')->unsigned();
            //$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('mostra_tela_principal');
            $table->string('cor');
            $table->boolean('ativo')->default(true);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contas');
    }
}
