<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('fone')->nullable();
            $table->bigInteger('cpf')->unique()->nullable(false);
            $table->integer('cep');
            $table->string('logradouro')->nullable(false);
            $table->integer('nr')->nullable(false);
            $table->string('complemento');
            $table->string('bairro')->nullable(false);
            $table->string('cidade')->nullable(false);
            $table->string('uf')->nullable(false);
            $table->string('password');
            $table->integer('nivel_usuario')->default(1);
            $table->integer('id_usuario_ava')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
