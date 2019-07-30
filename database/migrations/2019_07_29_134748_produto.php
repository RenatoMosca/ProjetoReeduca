<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('produto', function (Blueprint $table) {
            $table->bigIncrements('id_produto');
            $table->string('nome_produto');
            $table->text('desc_produto');
            $table->text('pre_requisitos');
            $table->string('url_img_prod',292)->nullable();
            $table->integer('carga_horaria');
            $table->integer('valor')->nullable();
            $table->string('publico_alvo');
            $table->text('ementa');  
            // $table->foreign('id_produto')->references('id_produto_autor')->on('produto_autor');          
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
        Schema::dropIfExists('produto');
    }
}
