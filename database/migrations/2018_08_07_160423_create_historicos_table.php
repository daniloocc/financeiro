<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('valor', 8, 2);
            $table->date('data');
            $table->string('descricao');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->integer('id_conta')->unsigned();
            $table->foreign('id_conta')->references('id')->on('contas')->onDelete('cascade');
            $table->boolean('recebido');
            $table->integer('id_tipo')->unsigned();
            $table->foreign('id_tipo')->references('id')->on('tipo_historicos')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('notas');
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
        Schema::dropIfExists('historicos');
    }
}
