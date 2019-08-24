<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('nome')->nullable();
            $table->integer('tipo_conta_premium_id')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telefone')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->integer('total_reviews')->nullable();
            $table->string('website_url')->nullable();
            $table->string('address')->nullable();
            $table->mediumText('description')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('foto_01')->nullable();
            $table->string('foto_02')->nullable();
            $table->string('foto_03')->nullable();
            $table->string('foto_04')->nullable();
            $table->string('foto_05')->nullable();
            $table->string('foto_06')->nullable();
            $table->string('foto_07')->nullable();
            $table->string('foto_08')->nullable();
            $table->string('foto_09')->nullable();
            $table->string('foto_10')->nullable();
            $table->boolean('status')->nullable();
            $table->integer('owner_user_id')->nullable();
            $table->boolean('featured')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empresas');
    }
}
