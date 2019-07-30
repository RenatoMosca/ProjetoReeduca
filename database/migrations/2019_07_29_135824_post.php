<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('post' function (Blueprint $table) {
            $table->bigIncrements('id_post');            
            $table->string('titulo')->nullable();
            $table->string('url_img_post')->nullable();
            $table->string('nome_autor_post')->nullable();
            $table->string('desc_breve');
            $table->text('artigo')->nullable();
            $table->integer('id_categoria')->nullable();
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
        Schema::dropIfExists('post');
    }
}
