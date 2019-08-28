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
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id_post');
            $table->string('titulo')->nullable(false);
            $table->string('url_img_post')->nullable(false);
            $table->string('nome_autor_post')->nullable(false);
            $table->string('desc_breve');
            $table->text('artigo')->nullable(false);
            $table->bigInteger('id_categoria')->unsigned();
            $table->timestamps();
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            

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

        Schema::table('post', function(Blueprint $table){
            $table->dropForeign('id_categoria');
        });

        Schema::dropIfExists('post');
    }
}
