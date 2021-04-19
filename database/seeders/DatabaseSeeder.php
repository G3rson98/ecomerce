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
            'Descripcion'=>'Tomar una tableta al dia, como un suplemento de dieta, preferiblemente con un comida.
                            Apoya la salud cardiovascular y la función cerebral.
                            Fuente de ácidos grasos esenciales de aceite de semillas.
                            Contiene proteínas, carbohidratos, fibras, calcio y magnesio, entre otros elementos.',
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
            'Descripcion'=>'Tomar  2 capsulas al dai con o sin alimento
                            Ayuda a prevenir las dolencias cardíacas.
                            Regulan la presión arterial y los niveles de colesterol.
                            Reducen el dolor en las articulaciones.
                            Redece la migraña la depresión.
                            Reduce las enfermedades autoinmunes y otros problemas de salud.
                            Complementan la salud de forma integral y protegen contra la inflamación y algunas patologías neurológicas.
                            Favorece el desarrollo del cerebro y la salud de los recién nacidos, por lo que su consumo es muy importante para las mujeres embarazadas y las madres en período de lactancia.',
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
            'Descripcion'=>'Tomar una capsula al dia, como un sulemento de dieta, preferiblemente con una comida
                            Las fuentes dietéticas de vitamina C incluyen frutas y verduras, principalmente cítricos como limón y naranjas.
                            La deficiencia grave de vitamina C causa escorpio.
                            1000 mg',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Vitamin C',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomar una capsula diaria con o sin alimento.
                            Gold C™, 1000 mg, de California Gold Nutrition.
                            Con vitamina C verificada por la farmacopea de EE. UU. (USP).
                            Producto apto para veganos y vegetarianos.
                            Fórmula sin gluten, OGM ni soya.
                            3rd Party Audited cGMP Registered (Certified) Facility: producto elaborado en instalaciones de terceros auditadas y registradas en conformidad con las Buenas Prácticas de Manufactura actuales (certificadas).
                            100% Gold Guarantee: garantía de satisfacción total de California Gold Nutrition.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Gold C',
            'Precio'=>'140',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar una capsula diaria, como suplemento de dieta, preferiblemente con alimento.
                            PROPORCIONA LA VITAMINA D NECESARIA POR EL CUERPO
                            AYUDA AL PROCESAMIENTO DE CALCIO Y DESARROLLO DE HUESOS Y MÚSCULOS.
                            APOYA LA SALUD DEL CORAZON
                            AYUDA AL SISTEMA INMUNE, EL NORMAL DE SANGRE NORMAL Y LA FUNCIÓN DE TIROIDES',
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
            'Descripcion'=>'Tomar una capsula cada 2 dias.
                            Apoyo estructural, de 5,000 UI, la más alta potencia.
                            Ayuda a mantener los huesos fuertes.
                            Apoya la salud dental.',
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
            'Descripcion'=>'Ingerir 4 capsulas al dia.
                            Apoyo de la piel en su firmeza y elasticidad.
                            Ayuda a mantener la estructura de las hebras y uñas del cabello.
                            Ayuda en la lucha contra la celulitis y las estrías.
                            El colágeno también tiene un efecto regenerativo sobre ligamentos y articulaciones.
                            Ayuda a neutralizar los radicales libres.
                            Ayuda en el bronceado.
                            Previene las arrugas y ralentiza el envejecimiento de la piel.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Colágeno Hidrolisado',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomar una tableta diaria preferiblemente con una comida.
                            El complejo vitamínico de la marca estadounidense Sundown
                            , es un compuesto de la más alta pureza y calidad de varias vitaminas B que trabajan juntas para ayudar a su sistema nervioso y al bienestar general.
                            Cada vitamina del Complejo B ayuda a convertir los alimentos en energía, para que cada día sea un gran día.
                            Una tableta diaria es todo lo que se necesita para obtener los beneficios de tiamina, riboflavina, niacina, B6, ácido fólico y B12.
                            Ideal para estudiantes.
            La marca sundown es apta para veganos y vegetarianos.',
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
            'Descripcion'=>'vitamidas infantiles, una gomita dairia.
                            La fórmula de New Kids Gummy Vitamins contiene 13 nutrientes esenciales
                            , incluida la  vitamina C para el apoyo inmunológico
                            , la vitamina D3 para la salud ósea y dental y la vitamina B12 (cianocobalamina) para la producción de energía.
                            Hemos agregado a esta nueva fórmula el yodo
                            , que desempeña un papel importante en el metabolismo y el desarrollo de su hijo
                            , el folato (como ácido fólico) para ayudar a convertir los alimentos en energía y vitamina E
                            , un antioxidante para el mantenimiento de una buena salud.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Multivitamin Gummy Bears',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos de 50 años en adelante',
            'Descripcion'=>'Consuma una tableta diaria, no exeda la dosis diaria.
                            Nuestros niveles más altos de vitamina D3
                            Personalizado para hombres
                            Especialmente formulado para apoyar las funciones del corazón + , cerebro + +, ojos Y y músculos en los hombres',
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
            'Categoria_Edad'=>'adultos y niños a partir de los 12 años',
            'Descripcion'=>'Ingrediente activo: el ingrediente activo es aspirina 325 mg, un medicamento antiinflamatorio no esteroidal de fuerza regular en comprimidos recubiertos. Comparar con el ingrediente activo Bayer Aspirin.
                            Alivio seguro del dolor y beneficios para salvar vidas. Habla con tu médico u otro proveedor de atención médica antes de usar aspirina 325 mg tabletas recubiertas de fuerza regular para tu corazón.
                            Dolor de cabeza, artritis y dolor muscular pueden causar molestias en cualquier momento del día. Basic Care Aspirin tabletas recubiertas de 325 mg contienen una droga antiinflamatoria no esteroidal (NSAID) que alivia temporalmente dolores de cabeza y dolores diarios.
                            Sin cafeína ni tintes: este producto es una tableta recubierta que contiene aspirina 325 mg, un analgésico y reductor de fiebre. Este producto es libre de gluten, así como cafeína y colorantes.
                            ASPIRIN está en una clase de analgésicos o analgésicos, llamados medicamentos antiinflamatorios no esteroidales.',
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
            'Descripcion'=>'Toma una tableta diariamente con una comida.
                            IMPLICADO EN LA FUNCIÓN DE LA PRÓSTATA Y LOS ÓRGANOS REPRODUCTIVOS.
                            PARTICIPA EN LA FORMACIÓN DE COLÁGENO Y SÍNTESIS DE PROTEÍNAS.
                            IMPLICADO EN LA PRODUCCIÓN DE INSULINA PARA EL REGLAMENTO DEL AZÚCAR DE SANGRE NECESARIO PARA LA CONCENTRACIÓN DE VITAMINA E Y LA ABSORCIÓN DE VITAMINA A.
                            ESTIMULA LAS ENZIMAS VITALES EN EL CUERPO',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Zinc',
            'Precio'=>'210',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adutos',
            'Descripcion'=>'Toma una tableta diaria como un suplemento de dieta.
                            Nutrientes esenciales: cada porción de una pastilla contiene más de cuatro veces el valor diario recomendado de zinc.
                            Salud reproductiva: se ha demostrado que el zinc es esencial para una función reproductiva normal.
                            Nutrición clave: también necesario para metabolizar carbohidratos, producción de insulina y uso de glucosa.
                            Avalado por la ciencia: desde 1935, GNC se ha comprometido a cumplir con los más altos estándares de calidad, seguridad y eficacia para que puedas vivir bien',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Gnc Zinc',
            'Precio'=>'210',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomar una capsula diaria, como suplemento de dieta, preferiblemente con una comida.
                            Fabricado en Estados Unidos.
                            Ayuda a prevenir la oxidación de las células.
                            Promueve la asimilación de vitaminas en el cuerpo.
                            Apoya la salud de los músculos, nervios, el cabello y la piel.
                            Ayuda a fortalecer el sistema inmunológico.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'vitamin E1000IU',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomar de 1 hast a3 tabletas diarias con agua y una comida.
                            Aporta 333 mg de calcio, 133 mg de magnesio y 5 mg de zinc, así como 5 mcg (200 UI) de vitamina D.
                            El magnesio ayuda a mantener huesos sanos, así como la función nerviosa y muscular.
                            El zinc es vital para el crecimiento y desarrollo normales.
                            El calcio adecuado es importante para los adolescentes, los adultos jóvenes y las mujeres posmenopáusicas.
                            La vitamina D ayuda a mejorar la absorción de calcio.
                            Nature Made® Calcium, Magnesium and Zinc está garantizado para cumplir con nuestros altos estándares de calidad. Está elaborado con ingredientes cuidadosamente seleccionados bajo estrictos procesos de fabricación.
                            Farmacopea de los Estados Unidos (USP) verificada',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Calcium Magnesium Zinc',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'tomar 2 capsulas diarias con cualquier comida, no es recomendable aumentar la dosis.
                            Refuerzo del Sistema Inmunitario / Prevención y Tratamiento de Gripes.
                            Resfriados, Infecciones Respiratorias, Prostatitis, Uretritis y Enfermedades.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Echinacea',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomas en caso de dolor de cabeza.
            Excedrin Extra Strength tiene una fórmula de acción rápida que brinda un poderoso alivio de los síntomas del dolor de cabeza.
            La combinación de ingredientes activos de Excedrin Extra Strength (acetaminofén, aspirina y cafeína) ofrece una alternativa para aliviar el dolor de cabeza sin receta y de acción rápida.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Excedrin Extra Strength',
            'Precio'=>'180',
            'Stock'=>'100',
            'Tipo'=>'farmaco'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomas en caso de dolor de cabeza.
                            Excedrin Migraine es un tratamiento de migraña de venta libre eficaz y recomendado por un médico con un perfil de seguridad comprobado.
                            En estudios clínicos, los pacientes con migrañas moderadas a severas experimentaron un alivio efectivo con solo una dosis.
                            Excedrin Migraine contiene acetaminofén, aspirina y cafeína terapéuticamente activa',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Exedrin',
            'Precio'=>'180',
            'Stock'=>'100',
            'Tipo'=>'suplemento'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'Tabletas de ibuprofeno, analgesico y reductor de fieble',
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
