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
            $table->integer('id_pedido');
            $table->integer('id_produto');
            $table->integer('valor');
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
        Schema::dropIfExists('item_pedido');
    }
}
