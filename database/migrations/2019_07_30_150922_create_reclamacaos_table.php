<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReclamacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('reclama_category_id')->nullable();
            $table->integer('reclama_sub_category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('titulo')->nullable();
            $table->longText('texto_reclamacao')->nullable();
            $table->string('foto_url_01')->nullable();
            $table->string('foto_url_02')->nullable();
            $table->string('foto_url_03')->nullable();
            $table->string('endereco')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefone')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('solucionada')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reclamacaos');
    }
}
