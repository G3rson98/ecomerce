<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->double('Cantidad',8,2);
            $table->string('Compra',200);
            $table->string('total',200);
            $table->unsignedBigInteger('idusuario');
            $table->foreign('idusuario')->references('id')->on('usuarios');
            $table->unsignedBigInteger('idcompra');
            $table->foreign('idcompra')->references('id')->on('compras');
            $table->unsignedBigInteger('idproducto');
            $table->foreign('idproducto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
