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
            'Categoria_Edad'=>'Adultos',
            'Descripcion'=>'Tomar una tableta al dia, como un suplemento de dieta, preferiblemente con un comida',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Alfa369',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Omega 3',
        //     'Precio'=>'90',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'Adultos',
            'Descripcion'=>'Tomar  2 capsulas al dai con o sin alimento',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Omega-3',
            'Precio'=>'150',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Evening Primrose Oil',
        //     'Precio'=>'150',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar una capsula al dia, como un sulemento de dieta, preferiblemente con una comida',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Vitamin C',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar una capsula diaria con o sin alimento',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Gold C',
            'Precio'=>'140',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar una capsula diaria, como suplemento de dieta, preferiblemente con alimento',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Vitamin D3',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'Suplemento'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'D3',
        //     'Precio'=>'90',
        //     'Stock'=>'210',
        //     'Tipo'=>'suplemento'
        // ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'D3 Gummies',
        //     'Precio'=>'160',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar una capsula cada 2 dias',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Vitamin D-3',
            'Precio'=>'160',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Biotin',
        //     'Precio'=>'180',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'4 años en adelante',
            'Descripcion'=>'ingerir 4 capsulas al dia',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Colágeno Hidrolisado',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar una tableta diaria preferiblemente con una comida',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'B Complex',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'2 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'GummiKing',
        //     'Precio'=>'150',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'niños',
            'Descripcion'=>'vitamidas infantiles, una gomita dairia',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Multivitamin',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'consuma una tableta diaria, no exeda la dosis diaria',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Centrum Siver For Men',
            'Precio'=>'170',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Centrum Adults',
        //     'Precio'=>'180',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Centrum Silver For Woman',
        //     'Precio'=>'170',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Centrum Silver For Woman',
        //     'Precio'=>'170',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'14 años en adelante',
            'Descripcion'=>'usar para bajar la fiebre y aliviar el dolor leve a moderado causado por dolor de cabeza',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Aspirin',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'farmaco'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Diafen',
        //     'Precio'=>'100',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Zinc Gluconate',
        //     'Precio'=>'100',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'',
            'Descripcion'=>'toma una tableta diariamente con una comida',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Zinc',
            'Precio'=>'210',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adutos',
            'Descripcion'=>'toma una tableta diaria como un suplemento de dieta',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Gnc Zinc',
            'Precio'=>'210',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar una capsula diaria, como suplemento de dieta, preferiblemente con una comida',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'vitamin E1000IU',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar de 1 hast a3 tabletas diarias con agua y una comida',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Calcium Magnesium Zinc',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar 2 capsulas diarias con cualquier comida, ayuda al sistema inmune, no es recomendable aumentar la dosis',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Echinacea',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomas en caso de dolor de cabeza',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Excedrin Extra Strength',
            'Precio'=>'180',
            'Stock'=>'100',
            'Tipo'=>'farmaco'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar en caso de migraña o dolor de cabeza',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Exedrin',
            'Precio'=>'180',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'tabletas de ibuprofeno, analgesico y reductor de fieble',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Advil',
            'Precio'=>'140',
            'Stock'=>'100',
            'Tipo'=>'farmaco'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Advin Value Size',
        //     'Precio'=>'160',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'todas la edades',
            'Descripcion'=>'Medidor de Saturacion',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Push',
            'Precio'=>'140',
            'Stock'=>'100',
            'Tipo'=>'artefacto'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Omron Inalador Copresor',
        //     'Precio'=>'280',
        //     'Stock'=>'100',
        //     'Tipo'=>'artefacto'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 en adelante',
            'Descripcion'=>'consumir 3 capsulas al dia preferiblemente con una comida',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Vit-Complex',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 en adelante',
            'Descripcion'=>'consumir 2 capsulas al dia no exeder el limite de consumo indicado en el envase',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Supravida Immuno',
            'Precio'=>'60',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'4 años en adelante',
            'Descripcion'=>'niños de 4 a 8 años ingerir 1 taza de 10ml 2 veces al dia. De 9 a 18 años y adultos consumir una Taza de 10 ml 3 veces al dia ',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Mucomel Imuno',
            'Precio'=>'60',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'niños',
            'Descripcion'=>'miños de 0 a 11 meses: 2ml una vez al dia, niños de 1 a 10 años 5 ml al dia   ',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Lavitan',
            'Precio'=>'50',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adulto',
            'Descripcion'=>'ingerir 1 capsula al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Vitamina-C',
            'Precio'=>'100',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adulto',
            'Descripcion'=>'ingerir una capsula al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Vitamina-D3',
            'Precio'=>'100',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adulto',
            'Descripcion'=>'1 comprimido al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Cenevit',
            'Precio'=>'25',
            'Stock'=>'100',
            'Tipo'=>'artefacto'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adulto',
            'Descripcion'=>'ingerir una capsula al dia con una comida',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Forcecaps',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'a partir de 9 años',
            'Descripcion'=>'tomas una gota al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'D3 gotas',
            'Precio'=>'40',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'19 años en adelante',
            'Descripcion'=>'ingerir una capsula al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Inmuno Prevent',
            'Precio'=>'70',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'15 en adelante',
            'Descripcion'=>'Consuma una cápsula de aceite de onagra, de Performance, tres veces al día, preferiblemente con las comidas.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Primula',
            'Precio'=>'50',
            'Stock'=>'100',
            'Tipo'=>'farmaco'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'9 años en adelante',
            'Descripcion'=>'ingerir una capsula al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'D3 Vitamina',
            'Precio'=>'80',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'4 años en adelante',
            'Descripcion'=>'ingerir 2 capsulas al dia, no ingerir mas de 2 capsulas',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Zinco',
            'Precio'=>'80',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'9 años en adelante',
            'Descripcion'=>'ingerir una capsula al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Zn Plus',
            'Precio'=>'50',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'18 años en adelante',
            'Descripcion'=>'ingerir 3 capsulas al dia junto a las principales comidas',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Mega 3.6.9',
            'Precio'=>'100',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adulto',
            'Descripcion'=>'ingerir de 1 a 2 capsulas al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Omega Ultra HD',
            'Precio'=>'95',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'niños , adultos',
            'Descripcion'=>'consumir 2 capsulas al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Omega-3',
            'Precio'=>'95',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'niños, adultos',
            'Descripcion'=>'ingerir 2 capsulas al dia',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'3 Omega',
            'Precio'=>'80',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
    }
}
