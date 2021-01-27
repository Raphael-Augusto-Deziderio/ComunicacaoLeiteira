<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInovulacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inovulacao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_criador');
            $table->integer('id_fiv');
            $table->string('nome', 100);
            $table->string('aprovado', 10);
            $table->integer('inovulacao');
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
        Schema::drop('inovulacao');
    }
}

