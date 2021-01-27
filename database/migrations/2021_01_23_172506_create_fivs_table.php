<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fivs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_criador');
            $table->string('nome', 100);
            $table->integer('numEmbrioes');
            $table->date('dataAquisicao');
            $table->string('matriz', 60);
            $table->string('reprodutor', 30);
            $table->string('nomePertence', 30);
            $table->integer('numControleRegistro');
            $table->string('raca', 30);
            $table->string('categoria', 30);
            $table->string('matrizReceptora', 30);
            $table->string('aprovado', 10);
            $table->string('assinatura');
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
        Schema::drop('fivs');
    }
}

