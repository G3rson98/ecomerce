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
            'Descripcion'=>'Tomar una tableta al día, como un suplemento de dieta, preferiblemente con una comida. Apoya la salud cardiovascular y la función cerebral. Fuente de ácidos grasos esenciales de aceite de semillas. Contiene proteínas, carbohidratos, fibras, calcio y magnesio, entre otros elementos.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Alfa369',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Alfa_Omega_369.png',
            'Imagen2'=>'Alfa_Omega_369_1.png',
            'Imagen2'=>'Alfa_Omega_369_1.png'
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
            'Descripcion'=>'Tomar  2 capsulas al dai con o sin alimento. Ayuda a prevenir las dolencias cardíacas. Regulan la presión arterial y los niveles de colesterol. Reducen el dolor en las articulaciones. Reduce la migraña la depresión. Reduce las enfermedades autoinmunes y otros problemas de salud. Complementan la salud de forma integral y protegen contra la inflamación y algunas patologías neurológicas. Favorece el desarrollo del cerebro y la salud de los recién nacidos, por lo que su consumo es muy importante para las mujeres embarazadas y las madres en período de lactancia.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Omega-3',
            'Precio'=>'150',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Gold_Omega_3.png',
            'Imagen2'=>'Gold_Omega_3_1.png'
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
            'Descripcion'=>'Tomar una capsula al día, como un suplemento de dieta, preferiblemente con una comida. Las fuentes dietéticas de vitamina C incluyen frutas y verduras, principalmente cítricos como limón y naranjas. La deficiencia grave de vitamina C causa escorpio.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Vitamin C',
            'Precio'=>'100',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Alfa_Vitamin_C.png',
            'Imagen2'=>'Alfa_Vitamin_C_1.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomar una capsula díaria con o sin alimento. Gold C™, 1000 mg, de California Gold Nutrition. Con vitamina C verificada por la farmacopea de EE. UU. (USP).                            Producto apto para veganos y vegetarianos. Fórmula sin gluten, OGM ni soya. Producto elaborado en instalaciones de terceros auditadas y registradas en conformidad con las Buenas Prácticas de Manufactura actuales (certificadas). Garantía de satisfacción total de California Gold Nutrition.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Gold C',
            'Precio'=>'140',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Gold_C.png',
            
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomar una capsula diaria, como suplemento de dieta, preferiblemente con alimento. Proporciona la vitamina d necesaria por el cuerpo. Ayuda al procesamiento de calcio y desarrollo de huesos y músculos. Apoya la salud del corazón. Ayuda al sistema inmune, el normal de sangre normal y la función de tiroides',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Vitamin D3',
            'Precio'=>'100',
            'Stock'=>'100',
            'Tipo'=>'Suplemento',
            'Imagen'=>'Alfa_Vitamin_D3.png',
            'Imagen2'=>'Alfa_Vitamin_D3_1.png'
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
            'Descripcion'=>'Tomar una capsula cada 2 días. Apoyo estructural, de 5,000 UI, la más alta potencia. Ayuda a mantener los huesos fuertes. Apoya la salud dental.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Vitamin D-3',
            'Precio'=>'170',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Now_Vitamin_D-3.png',
            'Imagen2'=>'Now_Vitamin_D-3_1.png',
            'Imagen3'=>'Now_Vitamin_D_3_2.png'
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
            'Descripcion'=>'Ingerir 4 capsulas al día. Apoyo de la piel en su firmeza y elasticidad. Ayuda a mantener la estructura de las hebras y uñas del cabello. Ayuda en la lucha contra la celulitis y las estrías. El colágeno también tiene un efecto regenerativo sobre ligamentos y articulaciones. Ayuda a neutralizar los radicales libres. Ayuda en el bronceado. Previene las arrugas y ralentiza el envejecimiento de la piel.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Colágeno Hidrolisado',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Profit_Colageno_Hidrolisado.png',
            'Imagen2'=>'Profit_Colageno_Hidrolisado_1.png'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'adultos',
        //     'Descripcion'=>'Tomar una tableta diaria preferiblemente con una comida. El complejo vitamínico de la marca estadounidense Sundown, es un compuesto de la más alta pureza y calidad de varias vitaminas B que trabajan juntas para ayudar a su sistema nervioso y al bienestar general. Cada vitamina del Complejo B ayuda a convertir los alimentos en energía, para que cada día sea un gran día. Una tableta díaria es todo lo que se necesita para obtener los beneficios de tiamina, riboflavina, niacina, B6, ácido fólico y B12. Ideal para estudiantes. La marca sundown es apta para veganos y vegetarianos.',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'B Complex',
        //     'Precio'=>'120',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento',
        //     'Imagen'=>'Sundown_B_Complex.png'        
        // ]);
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
            'Descripcion'=>'Vitaminas infantiles, una gomita diaria. La fórmula de New Kids Gummy Vitamins contiene 13 nutrientes esenciales, incluida la  vitamina C para el apoyo inmunológico, la vitamina D3 para la salud ósea y dental y la vitamina B12 (cianocobalamina) para la producción de energía.Hemos agregado a esta nueva fórmula el yodo, que desempeña un papel importante en el metabolismo y el desarrollo de su hijo, el folato (como ácido fólico) para ayudar a convertir los alimentos en energía y vitamina E, un antioxidante para el mantenimiento de una buena salud.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Multivitamin Gummy Bears',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Alafa_Multivitamin_Gummibears.png',
            'rango'=>'niño'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos de 50 años en adelante',
            'Descripcion'=>'Consuma una tableta diaria, no exceda la dosis diaria. Nuestros niveles más altos de vitamina D3. Personalizado para hombres. Especialmente formulado para apoyar las funciones del corazón + , cerebro + +, ojos Y y músculos en los hombres',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Centrum Siver For Men',
            'Precio'=>'170',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Centrum_Silver_For_Men.png',
            'rango'=>'hombre'
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
            'Descripcion'=>'Ingrediente activo: el ingrediente activo es aspirina 325 mg, un medicamento antiinflamatorio no esteroidal de fuerza regular en comprimidos recubiertos. Comparar con el ingrediente activo Bayer Aspirin. Alivio seguro del dolor y beneficios para salvar vidas. Habla con tu médico u otro proveedor de atención médica antes de usar aspirina 325 mg tabletas recubiertas de fuerza regular para tu corazón. Dolor de cabeza, artritis y dolor muscular pueden causar molestias en cualquier momento del día. Basic Care Aspirin tabletas recubiertas de 325 mg contienen una droga antiinflamatoria no esteroidal (NSAID) que alivia temporalmente dolores de cabeza y dolores diarios. Sin cafeína ni tintes: este producto es una tableta recubierta que contiene aspirina 325 mg, un analgésico y reductor de fiebre. Este producto es libre de gluten, así como cafeína y colorantes. ASPIRIN está en una clase de analgésicos o analgésicos, llamados medicamentos antiinflamatorios no esteroidales.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Aspirin',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'farmaco',
            'Imagen'=>'Aspirin_Basic_Care.png',
          
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitamidas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Díafen',
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
            'Descripcion'=>'Toma una tableta diariamente con una comida. Implicado en la función de la próstata y los órganos reproductivos. Participa en la formación de colágeno y síntesis de proteínas. Implicado en la producción de insulina para el reglamento del azúcar de sangre necesario para la concentración de vitamina e y la absorción de vitamina a. Estimula las enzimas vitales en el cuerpo',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Zinc',
            'Precio'=>'210',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Now_Zinc.png',
            'Imagen2'=>'Now_Zinc_1.png',
            'Imagen3'=>'Now_Zinc_2.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adutos',
            'Descripcion'=>'Toma una tableta diaria como un suplemento de dieta. Nutrientes esenciales: cada porción de una pastilla contiene más de cuatro veces el valor diario recomendado de zinc. Salud reproductiva: se ha demostrado que el zinc es esencial para una función reproductiva normal. Nutrición clave: también necesario para metabolizar carbohidratos, producción de insulina y uso de glucosa. Avalado por la ciencia: desde 1935, GNC se ha comprometido a cumplir con los más altos estándares de calidad, seguridad y eficacia para que puedas vivir bien',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Gnc Zinc',
            'Precio'=>'210',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Gnc_Zinc.png',
            'Imagen2'=>'Gnc_Zinc.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomar una capsula diaria, como suplemento de dieta, preferiblemente con una comida. Fabricado en Estados Unidos. Ayuda a prevenir la oxidación de las células. Promueve la asimilación de vitaminas en el cuerpo. Apoya la salud de los músculos, nervios, el cabello y la piel. Ayuda a fortalecer el sistema inmunológico.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'vitamin E1000IU',
            'Precio'=>'120',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Alfa_Vitamin_E1000IU.png',
            'Imagen2'=>'Alfa_Vitamin_E1000IU_1.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomar de 1 hasta a3 tabletas diarias con agua y una comida. Aporta 333 mg de calcio, 133 mg de magnesio y 5 mg de zinc, así como 5 mcg (200 UI) de vitamina D. El magnesio ayuda a mantener huesos sanos, así como la función nerviosa y muscular. El zinc es vital para el crecimiento y desarrollo normales. El calcio adecuado es importante para los adolescentes, los adultos jóvenes y las mujeres posmenopáusicas. La vitamina D ayuda a mejorar la absorción de calcio. Nature Made® Calcium, Magnesium and Zinc está garantizado para cumplir con nuestros altos estándares de calidad. Está elaborado con ingredientes cuidadosamente seleccionados bajo estrictos procesos de fabricación. Farmacopea de los Estados Unidos (USP) verificada',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Calcium Magnesium Zinc',
            'Precio'=>'125',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'NatureMade_CalciumMagnesiumZinc.png',
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomar 2 capsulas diarias con cualquier comida, no es recomendable aumentar la dosis. Refuerzo del Sistema Inmunitario / Prevención y Tratamiento de Gripes. Resfriados, Infecciones Respiratorias, Prostatitis, Uretritis y Enfermedades.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Echinacea',
            'Precio'=>'125',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Century_Echinacea.png',
            'Imagen2'=>'Century_Echinacea_1.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomas en caso de dolor de cabeza. Excedrin Extra Strength tiene una fórmula de acción rápida que brinda un poderoso alivio de los síntomas del dolor de cabeza. La combinación de ingredientes activos de Excedrin Extra Strength (acetaminofén, aspirina y cafeína) ofrece una alternativa para aliviar el dolor de cabeza sin receta y de acción rápida.',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Excedrin Extra Strength',
            'Precio'=>'180',
            'Stock'=>'100',
            'Tipo'=>'farmaco',
            'Imagen'=>'Excedrin_Extra_Strength.png',
            'Imagen2'=>'Excedrin_Extra_Strength_1.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adultos',
            'Descripcion'=>'Tomas en caso de dolor de cabeza. Excedrin Migraine es un tratamiento de migraña de venta libre eficaz y recomendado por un médico con un perfil de seguridad comprobado. En estudios clínicos, los pacientes con migrañas moderadas a severas experimentaron un alivio efectivo con solo una dosis. Excedrin Migraine contiene acetaminofén, aspirina y cafeína terapéuticamente activa',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Exedrin',
            'Precio'=>'180',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Excedrin_Migraine.png',
            'Imagen2'=>'Excedrin_Migraine_1.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 +',
            'Descripcion'=>'Tabletas de ibuprofeno, analgésico y reductor de fiebre',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Advil',
            'Precio'=>'140',
            'Stock'=>'100',
            'Tipo'=>'farmaco',
            'Imagen'=>'Advil.png'
        ]);
        // DB::Table('productos')->insert([
        //     'Calificacion'=>'5',
        //     'Categoria_Edad'=>'16 +',
        //     'Descripcion'=>'vitaminas infantiles',
        //     'Nacionalidad'=>'EEUU',
        //     'Nombre'=>'Advin Value Size',
        //     'Precio'=>'160',
        //     'Stock'=>'100',
        //     'Tipo'=>'suplemento'
        // ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'todas la edades',
            'Descripcion'=>'Medidor de Saturación',
            'Nacionalidad'=>'EEUU',
            'Nombre'=>'Push',
            'Precio'=>'140',
            'Stock'=>'100',
            'Tipo'=>'artefacto',
            'Imagen'=>'Push.png'
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
            'Descripcion'=>'Consumir 3 capsulas al día preferiblemente con una comida. VIT-COMPLEX es una fuente de nutrientes esenciales para una rutina saludable. Los beneficios ayudan con la práctica de actividades físicas, asegurando que siempre tengas a mano los mejores nutrientes para la recuperación post-entrenamiento y la voluntad de entrenar aún mejor.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Vit-Complex',
            'Precio'=>'90',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'VITCOMPLEX-az.jpg',
            
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'16 en adelante',
            'Descripcion'=>'Consumir 2 capsulas al día no exeder el limite de consumo indicado en el envase. Refuerza y fortalece el sistema inmunológico, debido a su composición de Vitamina C y Vitamina D, además de poseer también Selenio que protege al cuerpo de infecciones. Regula la función de músculos y el sistema nervioso, ayudando a la formación de proteína gracias al Magnesio que tiene. Y finalmente el Cobre ayuda a el correcto funcionamiento del sistema nervioso.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Supravida Immuno',
            'Precio'=>'80',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Supravida_Imunno.png',
            'Imagen2'=>'Supravida_Imunno_1.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'4 años en adelante',
            'Descripcion'=>'Niños de 4 a 8 años ingerir 1 taza de 10ml 2 veces al día. De 9 a 18 años y adultos consumir una Taza de 10 ml 3 veces al día Mucomel es fuente de vitamina C y Zinc, ¡refuerza el sistema inmunológico y tiene acción antioxidante!',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Mucomel Imuno',
            'Precio'=>'65',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Mucomel_Imuno_1.png',
            'Imagen2'=>'Mucomel_Imuno.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'niños',
            'Descripcion'=>'Niños de 0 a 11 meses: 2ml una vez al día, niños de 1 a 10 años 5 ml al día. Lavitan Kids Tutti- Frutti es un suplemento desarrollado para complementar la nutrición infantil. Rico en vitaminas A, C y D, es una forma deliciosa y divertida de garantizar las vitaminas que los niños necesitan para un crecimiento y desarrollo saludables.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Lavitan',
            'Precio'=>'65',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Lavitan_Vitaminas.png',
            'rango'=>'niño'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'apartir de los 9 años',
            'Descripcion'=>'Ingerir 1 capsula al día',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Vitamina-C',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'BemNutrir_Vitamina_C.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adulto',
            'Descripcion'=>'Ingerir una capsula al día',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Vitamina-D3',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'BemNutrir_Vitamina_D3.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adulto',
            'Descripcion'=>'1 comprimido al día',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Cenevit',
            'Precio'=>'25',
            'Stock'=>'100',
            'Tipo'=>'artefacto',
            'Imagen'=>'Cenevit.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adulto',
            'Descripcion'=>'Ingerir una capsula al día con una comida. Contiene las vitaminas A, B6, B12, C, el selenio y el zinc ayudan en el funcionamiento del sistema inmunológico. Contiene las vitaminas B1, B2, B3, B6 y B12 ayudan en el metabolismo energético. Contiene el cromo y el zinc ayudan en el metabolismo de proteínas, carbohidratos y grasas. Contiene las vitaminas C, E, Selenio y Zinc son antioxidantes que ayudan a proteger contra los causados por los radicales libres.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Forcecaps',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'BemNutrir_Forcecaps.png',
            'Imagen2'=>'BemNutrir_Forcecaps_1.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'a partir de 9 años',
            'Descripcion'=>'Tomas una gota al día. Estimula la producción de una proteína llamada catelicidina. Estimula la producción de osteocalcina. Participa en el mantenimiento del sistema inmunológico desde la formación del embrión y durante toda la vida',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'D3 gotas',
            'Precio'=>'65',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Melcoprol_D3_Gotas.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'19 años en adelante',
            'Descripcion'=>'ingerir una capsula al día. Regulación de los procesos metabólicos. El Zinc, que ayuda al mantenimiento de los huesos. Cero gluten. Mejora al funcionamiento muscular. Fortalecimiento del cabello, piel y uñas.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Inmuno Prevent',
            'Precio'=>'80',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Melcoprol_Imuno_Prevent.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'15 en adelante',
            'Descripcion'=>'Consuma una cápsula de aceite de onagra, de Performance, tres veces al día, preferiblemente con las comidas. Rico en omega 6. Ayuda a la hidratacion y elasticidad de la piel. Reduce la perdida de agua en la piel. Ayuda a combatir dolores menstruales. Reduce los síntomas de dermatitis. Fortalece los huesos',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Oleo de Primula',
            'Precio'=>'60',
            'Stock'=>'100',
            'Tipo'=>'farmaco',
            'Imagen'=>'primulaN.jpg',
            'Imagen2'=>'primulaN2.jpg',
            'rango'=>'mujer'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'9 años en adelante',
            'Descripcion'=>'Ingerir una capsula al día. Suplementos de vitamina D: colecalciferol. Ayuda en el funcionamiento del sistema inmunológico, muscular y en el proceso de división celular.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'D3 Vitamina',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Melcoprol_D3.png',
            'Imagen2'=>'Melcoprol_D3_1.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'4 años en adelante',
            'Descripcion'=>'Ingerir 2 capsulas al día, no ingerir mas de 2 capsulas. Ayuda a la visión, contribuye al mantenimiento del cabello, la piel y las uñas, ayuda al mantenimiento de los huesos y al funcionamiento del sistema inmunológico.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Zinco',
            'Precio'=>'100',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Melcoprol_Zinco.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'9 años en adelante',
            'Descripcion'=>'Ingerir una capsula al día. Ayuda al sistema inmunológico. Antioxidante, elimina los radicales libres. Ayuda al metabolismo de la vitamina A. Ayuda al proceso correcto de la división celular',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Zn Plus',
            'Precio'=>'70',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Biovotale_Plus_Zn.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'18 años en adelante',
            'Descripcion'=>'Ingerir 3 capsulas al día junto a las principales comidas. Los ácidos grasos esenciales son las grasas buenas indispensables para una dieta saludable y no son producidos por nuestro cuerpo. MEGA 369 es un suplemento registrado y elaborado por  Melcoprol , con los más altos estándares de calidad farmacéutica, en cuanto al manual de buenas prácticas de fabricación. Además, es la combinación perfecta de 5 aceites vegetales ricos en ácidos grasos esenciales mono y poliinsaturados, contenidos en 1 cápsula de 1000 mg. Los ácidos grasos esenciales son las grasas buenas indispensables para una dieta saludable y no son producidos por nuestro organismo, es decir, es necesario complementar alimentos ricos en estos nutrientes porque forman parte de varios procesos vitales para nuestra salud.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Mega 3.6.9',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'NutryMaxx_Mega3.6.9.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'adulto',
            'Descripcion'=>'Ingerir de 1 a 2 capsulas al día. OMEGA 3 ULTRA HD. Aceite de Pescado con Vitaminas y Minerales. 60 cápsulas. . Omega ultra HD 1200mg se produce en cápsulas de gelatina blanda para facilitar la deglución y una desintegración más rápida en el tracto gastrointestinal, obteniendo un mejor rendimiento en la absorción de nutrientes. Su formulación cuenta con un complejo de vitaminas y minerales de la A a la Z, que ayudan a todo el organismo, además del aceite de pescado, a mantener niveles saludables de triglicéridos.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Omega Ultra HD',
            'Precio'=>'110',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Melcoprol_Omega_UltraHD.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'niños , adultos',
            'Descripcion'=>'Consumir 2 capsulas al día. El omega 3 es un conjunto de grasas, que forman parte de los ácidos grasos poliinsaturados EPA (ácido eicosapentaenoico) y DHA (ácido docosahexaenoico), que a su vez, se encuentran en mayor cantidad en alimentos como pescados, mariscos de mar y aceite de pescado.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'Omega-3',
            'Precio'=>'100',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Melcoprol_Omega-3.png',
            'Imagen2'=>'Melcoprol_Omega-3_1.png'
        ]);
        DB::Table('productos')->insert([
            'Calificacion'=>'5',
            'Categoria_Edad'=>'niños, adultos',
            'Descripcion'=>'Ingerir 2 capsulas al día. El consumo de ácidos grasos omega-3 ayuda a mantener niveles saludables de triglicéridos, siempre que se acompañe de una dieta equilibrada y hábitos de vida saludables.',
            'Nacionalidad'=>'Brasil',
            'Nombre'=>'3 Omegas',
            'Precio'=>'95',
            'Stock'=>'100',
            'Tipo'=>'suplemento',
            'Imagen'=>'Melcoprol_3_Omegas.png'
        ]);
    }
}
