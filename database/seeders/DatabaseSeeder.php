<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('productos')->insert([
            'Calificacion'=>'4.3',
            'Categoria_Edad'=>'6 +',
            'Descripcion'=>'vitamidas infantiles',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Echinacea',
            'Precio'=>'150',
            'Stock'=>'100',
            'Tipo'=>'caquita'
        ]);
    }
}
