<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReclamaAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclama_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('user_id')->nullable();
            $table->text('texto_comentario')->nullable();
            $table->string('reclama_id')->nullable();
            $table->boolean('status')->nullable();
            $table->integer('reclamante_id')->nullable();
            $table->string('concluida')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reclama_answers');
    }
}
