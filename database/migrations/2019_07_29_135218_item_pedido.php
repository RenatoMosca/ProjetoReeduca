<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('item_pedido', function (Blueprint $table) {
            $table->bigIncrements('id_item_pedido');
            $table->bigInteger('id_pedido')->unsigned();
            $table->bigInteger('id_produto')->unsigned();
            $table->integer('valor');
            $table->timestamps();
            $table->foreign('id_produto')->references('id_produto')->on('produto');
            $table->foreign('id_pedido')->references('id_pedido')->on('pedido');

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

        Schema::table('item_pedido', function(Blueprint $table){
            $table->dropForeign('id_produto');
            $table->dropForeign('id_pedido');
        });

        Schema::dropIfExists('item_pedido');

    }
}
