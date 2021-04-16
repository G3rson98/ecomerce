<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListaDeseo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista__deseos', function (Blueprint $table) {
            $table->id();
            $table->double('Cantidad',8,2);
            $table->unsignedBigInteger('idP');
            $table->foreign('idP')->references('id')->on('productos');
            $table->unsignedBigInteger('idU');
            $table->foreign('idU')->references('id')->on('usuarios');
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
    }
}