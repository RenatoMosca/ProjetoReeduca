<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pedido', function (Blueprint $table) {
            $table->bigIncrements('id_pedido');
            $table->string('status');
            $table->bigInteger('id_usuario')->unsigned();
            $table->string('forma_pagto');
            $table->integer('nr_parcelas');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
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

        Schema::table('pedido', function(Blueprint $table){
            $table->dropForeign('id_usuario');
        });

        Schema::dropIfExists('pedido');
    }
}
