<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_livro');
            $table->string('url_img');
            $table->string('infor_regras');
            $table->string('cod_sala');
            $table->boolean('ativo');
            $table->date('data_inicio');
            $table->date('data_fim');

            $table->date('data_leituras');
            $table->date('data_debate');
            $table->integer('paginas');
            $table->integer('total_sala');

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
        Schema::dropIfExists('rooms');
    }
}
