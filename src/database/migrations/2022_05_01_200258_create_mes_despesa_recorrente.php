<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mes_despesa_recorrente', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('data');
            $table->float('valor');
            $table->string('comentario');
            $table->string('forma_pagamento');
            $table->boolean('status')->default(0);
            $table->binary('boleto');
            $table->binary('comprovante');

            $table->string('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->string('id_despesa_recorrente');
            $table->foreign('id_despesa_recorrente')->references('id')->on('despesa_recorrente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mes_despesa_recorrente');
    }
};
