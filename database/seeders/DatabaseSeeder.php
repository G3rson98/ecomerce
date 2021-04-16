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
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'vitamidas infantiles',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Alfa369',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'imagen'=>'images\productos\a.jpg'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'vitamidas infantiles',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Omega 3',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'imagen'=>'images\productos\b.jpg'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'vitamidas infantiles',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Omega-3',
            'Precio'=>'150',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'imagen'=>'images\productos\c.jpg'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'vitamidas infantiles',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Evening Primrose Oil',
            'Precio'=>'150',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'imagen'=>'images\productos\c.jpg'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'vitamidas infantiles',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Vitamin C',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'imagen'=>'images\productos\c.jpg'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'vitamidas infantiles',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Gold C',
            'Precio'=>'140',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'imagen'=>'images\productos\c.jpg'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'vitamidas infantiles',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Vitamin D3',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'Suplemento',
            'imagen'=>'images\productos\c.jpg'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'vitamidas infantiles',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'D3',
            'Precio'=>'90',
            'Stock'=>'210',
            'Tipo'=>'suplemento',
            'imagen'=>'images\productos\c.jpg'
        ]);
    }
}
