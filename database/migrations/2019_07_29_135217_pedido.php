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
            $table->integer('id_usuario');
            $table->string('forma_pagto');
            $table->integer('nr_parcelas');
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
        Schema::dropIfExists('pedido');
    }
}
