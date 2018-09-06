<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartaoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartao_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cartao')->unsigned();
            $table->foreign('id_cartao')->references('id')->on('cartaos')->onDelete('cascade');

            $table->string('descricao');
            $table->double('limite', 8, 2);

            $table->integer('fechamento');
            $table->integer('vencimento');

            $table->integer('id_conta')->unsigned();
            $table->foreign('id_conta')->references('id')->on('contas')->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('cartao_usuarios');
    }
}
