<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->double('Calificacion',8,2);
            $table->string('Categoria_Edad');
            $table->string('Descripcion',200);
            $table->string('Nacionalidad',50);
            $table->string('Nombre',70);
            $table->double('Precio',8,2);
            $table->double('Stock',8,2);
            $table->string('Tipo',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
