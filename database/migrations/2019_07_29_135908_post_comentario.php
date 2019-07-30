<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostComentario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('post_comentario' function (Blueprint $table) {
            $table->bigIncrements('id_post_comentario');            
            $table->string('status');
            $table->string('nome_autor_comentario')->nullable();
            $table->string('url_img_comentario');
            $table->string('comentario',200)->nullable();
            $table->integer('id_post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('post_comentario');
    }
}
