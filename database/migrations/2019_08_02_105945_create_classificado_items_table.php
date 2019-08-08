<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassificadoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classificado_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('category_id')->nullable();
            $table->string('titulo')->nullable();
            $table->string('alias')->nullable();
            $table->text('descricao')->nullable();
            $table->integer('cidade_id')->nullable();
            $table->integer('bairro_id')->nullable();
            $table->float('preco')->nullable();
            $table->boolean('tipo')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cep')->nullable();
            $table->string('telefone')->nullable();
            $table->string('tags')->nullable();
            $table->tinyInteger('visualizacoes')->nullable();
            $table->boolean('published')->nullable();
            $table->integer('user_id')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('classificado_items');
    }
}
