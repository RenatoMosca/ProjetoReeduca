<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mensagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mensagem', function (Blueprint $table) {
            $table->bigIncrements('id_mensagem');
            $table->string('nome_contato')->nullable(false);
            $table->date('dt_nascto');
            $table->integer('fone');
            $table->string('email')->unique();
            $table->text('mensagem')->nullable(false);
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
        //
        Schema::dropIfExists('mensagem');
    }
}
