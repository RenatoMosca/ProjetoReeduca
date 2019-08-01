<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('nome_usuario');
            $table->string('email')->unique();
            $table->integer('fone');
            $table->integer('cpf',11)->nullable(false);
            $table->integer('cep',8)->nullable(false);
            $table->string('logradouro')->nullable(false);
            $table->integer('nr')->nullable(false);
            $table->string('complemento');
            $table->string('bairro')->nullable(false);
            $table->string('cidade')->nullable(false);
            $table->string('uf')->nullable(false);
            $table->string('senha')->nullable(false);
            $table->integer('id_usuario_ava');
            $table->timestamps();
            $table->foreign('id_usuario')->references('id_usuario')->on('pedido');
            
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
        Schema::table('usuario', function(Blueprint $table){
            $table->dropForeign('id_usuario');
        });

        Schema::dropIfExists('usuario');
    }
}
