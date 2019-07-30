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
            $table->string('email')->nullable(),unique();
            $table->integer('fone');
            $table->integer('cpf',11)->nullable();
            $table->integer('cep',8)->nullable();
            $table->string('logradouro')->nullable();
            $table->integer('nr')->nullable();
            $table->string('complemento');
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('senha')->nullable();
            $table->integer('id_usuario_ava');
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
        Schema::dropIfExists('usuario');
    }
}
