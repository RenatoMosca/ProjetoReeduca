<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutoAutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('produto_autor', function (Blueprint $table) {
            $table->bigIncrements('id_produto_autor');
            $table->bigInteger('id_produto')->unsigned();
            $table->bigInteger('id_autor')->unsigned();
            $table->timestamps();
            $table->foreign('id_produto')->references('id_produto')->on('produto');
            $table->foreign('id_autor')->references('id_autor')->on('autor');

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

        Schema::table('produto_autor', function(Blueprint $table){
            $table->dropForeign('id_produto');
            $table->dropForeign('id_autor');
        });

        Schema::dropIfExists('produto_autor');
    }

}
