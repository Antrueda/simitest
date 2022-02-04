<?php


use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Modulo;
use Illuminate\Database\Seeder;

class ModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Modulo::create(['id' =>  1, 'estusuario_id' => 2, 's_modulo' => 'ELABORACIÓN DE DOCUMENTOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  2, 'estusuario_id' => 2, 's_modulo' => 'DIGITALIZACIÓN DE TEXTOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  3, 'estusuario_id' => 2, 's_modulo' => 'CALCULAR LOS COSTOS DE OPERACIÓN DE ACUERDO CON MÉTODOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  4, 'estusuario_id' => 2, 's_modulo' => 'REGISTROS CONTABLES', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  5, 'estusuario_id' => 2, 's_modulo' => 'CONVOCATORIA SOCIALES', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  6, 'estusuario_id' => 2, 's_modulo' => 'CARACTERIZACIÓN DE POBLACIÓN', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  7, 'estusuario_id' => 2, 's_modulo' => 'USO DEL TIEMPO LIBRE', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  8, 'estusuario_id' => 2, 's_modulo' => 'ESTRATEGIAS COMUNICATIVAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  9, 'estusuario_id' => 2, 's_modulo' => 'PREPARAR RECURSO DE ARBITRAJE', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  10, 'estusuario_id' => 2, 's_modulo' => 'APLICAR REGLAMENTO TÉCNICO', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  11, 'estusuario_id' => 2, 's_modulo' => 'DISEÑAR PLAN DE ENTRENAMIENTO', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  12, 'estusuario_id' => 2, 's_modulo' => 'PREPARACIÓN DEL PARTICIPANTE', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  13, 'estusuario_id' => 2, 's_modulo' => 'OPERACIÓN DE LOS RECURSOS TECNOLÓGICOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  14, 'estusuario_id' => 2, 's_modulo' => 'CONTROL DE LOS RECURSOS TECNOLÓGICOS DE OFICINA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  15, 'estusuario_id' => 2, 's_modulo' => 'IMPLEMENTACIÓN DE SOLUCIONES DE INFORMACIÓN PARA LA UNIDAD ADMINISTRATIVA.', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  16, 'estusuario_id' => 2, 's_modulo' => 'CODIFICACIÓN DE SOFTWARE', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  17, 'estusuario_id' => 2, 's_modulo' => 'DIAGNÓSTICO DE SISTEMA DE ALIMENTACIÓN', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  18, 'estusuario_id' => 2, 's_modulo' => 'REPARACIÓN SISTEMA DE ALIMENTACIÓN', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  19, 'estusuario_id' => 2, 's_modulo' => 'DIAGNÓSTICO A MOTORES DE GASOLINA Y GAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  20, 'estusuario_id' => 2, 's_modulo' => 'REPARACIÓN DE FALLAS EN LOS MOTORES DE GASOLINA Y GAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  21, 'estusuario_id' => 2, 's_modulo' => 'DIAGNÓSTICO DE EQUIPOS DE CÓMPUTO', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  22, 'estusuario_id' => 2, 's_modulo' => 'CORRECCIÓN DE FALLAS EN EL PC', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  23, 'estusuario_id' => 2, 's_modulo' => 'DIAGNÓSTICO DE CONECTIVIDAD ENTRE EQUIPOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  24, 'estusuario_id' => 2, 's_modulo' => 'MANTENIMINETO PREVENTIVO DE CONECTIVIDAD', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  25, 'estusuario_id' => 2, 's_modulo' => 'PREPARACIÓN DE MASAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  26, 'estusuario_id' => 2, 's_modulo' => 'MOLDEO DE MASAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  27, 'estusuario_id' => 2, 's_modulo' => 'ACABADOS DE PANIFICACIÓN', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  28, 'estusuario_id' => 2, 's_modulo' => 'ALISTAMIENTO PARA PANADERÍA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  29, 'estusuario_id' => 2, 's_modulo' => 'MANICURA Y PEDICURA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  30, 'estusuario_id' => 2, 's_modulo' => 'CORTE DE CABELLO Y CAMBIO DE ESTRUCTURA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  31, 'estusuario_id' => 2, 's_modulo' => 'PEINADO DE CABELLERAS SEGÚN NORMAS TÉCNICAS VIGENTES', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 2]);
        Modulo::create(['id' =>  32, 'estusuario_id' => 2, 's_modulo' => 'MAQUILLAJE SOCIAL', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  33, 'estusuario_id' => 2, 's_modulo' => 'MANIPULACIÓN DE ALIMENTOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  34, 'estusuario_id' => 2, 's_modulo' => 'CLASIFICACIÓN Y ORGANIZACIÓN DE MATERIAS PRIMAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  35, 'estusuario_id' => 2, 's_modulo' => 'PRODUCCIÓN DE ALIMENTOS DE ACUERDO CON PROCEDIMIENTOS TÉCNICOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  36, 'estusuario_id' => 2, 's_modulo' => 'ALISTAMIENTO, SERVICIO DE ALIMENTOS Y BEBIDAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  37, 'estusuario_id' => 2, 's_modulo' => 'MANTENIMIENTO DE BICICLETAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  38, 'estusuario_id' => 2, 's_modulo' => 'ENSAMBLE DE BICICLETAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 2]);
        Modulo::create(['id' =>  39, 'estusuario_id' => 2, 's_modulo' => 'DISEÑO Y ALISTAMIENTO DE TUBERIA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  40, 'estusuario_id' => 2, 's_modulo' => 'APLICACIÓN DE SOLDADURA MIG MAG Y SUS DIFERENTES TECNICAS EN EL PROCESO DE FABRICACIÓN DE LAS BICICLETAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 2]);
        Modulo::create(['id' =>  41, 'estusuario_id' => 2, 's_modulo' => 'MANEJO DE MAQUINAS Y HERRAMIENTAS DE BANCO PARA MADERAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  42, 'estusuario_id' => 2, 's_modulo' => 'ARMAR PRODUCTOS DE MADERA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  43, 'estusuario_id' => 2, 's_modulo' => 'PROCESOS DE ESTAMPACIÓN A UNA TINTA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  44, 'estusuario_id' => 2, 's_modulo' => 'PROCESOS DE ESTAMPACIÓN A DOS TINTAS Y SOBRE DIFERENTES SUSTRATOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  45, 'estusuario_id' => 2, 's_modulo' => 'NORMATIVIDAD VIGENTE PARA MANIPULACIÓN DE ALIMENTOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  46, 'estusuario_id' => 2, 's_modulo' => 'ALISTAR MATERIA PRIMA DE PASTELERÍA DE ACUERDO CON EL PROGRAMA DE PRODUCCIÓN Y NORMATIVIDAD VIGENTE', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  47, 'estusuario_id' => 2, 's_modulo' => 'ELABORACIÓN DE PRODUCTOS CON TRATAMIENTOS TÉRMICOS -PIZZA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  48, 'estusuario_id' => 2, 's_modulo' => 'ELABORACIÓN DE PRODUCTOS CON TRATAMIENTOS TÉRMICOS-PAN', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  49, 'estusuario_id' => 2, 's_modulo' => 'OPERACIÓN BÁSICA DE MÁQUINA PLANA 1 AGUJA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  50, 'estusuario_id' => 2, 's_modulo' => 'OPERACIÓN BÁSICA DE MÁQUINA FILETEADORA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  51, 'estusuario_id' => 2, 's_modulo' => 'OPERACIÓN BÁSICA DE MÁQUINA COLLARIN', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  52, 'estusuario_id' => 2, 's_modulo' => 'ALISTAMIENTO Y CORTE DE PRENDAS DE VESTIR', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  53, 'estusuario_id' => 2, 's_modulo' => 'MANTENIMIENTO PREVENTIVO DE LA MOTOCICLETA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  54, 'estusuario_id' => 2, 's_modulo' => 'SINCRONIZACIÓN DE LA MOTOCICLETA DE ACUERDO A PARÁMETROS Y NORMATIVIDAD', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  55, 'estusuario_id' => 2, 's_modulo' => 'MANTENIMIENTO PREVENTIVO Y CORRECTIVO DEL SISTEMA ELECTRICO', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  56, 'estusuario_id' => 2, 's_modulo' => 'PROPIEDADES DE LOS METALES NOBLES Y HERRRAMIENTAS PARA ELABORAR PIEZAS DE JOYERÍA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  57, 'estusuario_id' => 2, 's_modulo' => 'COSTRUCIÓN DE MOLDES PARA PIEZAS DE MARROQUINERÍA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  58, 'estusuario_id' => 2, 's_modulo' => 'ALISTAMIENTO Y CORTE DE CUERO: NORMAS ESTABLECIDAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 2]);
        Modulo::create(['id' =>  59, 'estusuario_id' => 2, 's_modulo' => 'PREPARAR SUELOS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 4]);
        Modulo::create(['id' =>  60, 'estusuario_id' => 2, 's_modulo' => 'REALIZAR LABORES DE POSCOSECHA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  61, 'estusuario_id' => 2, 's_modulo' => 'VELAR POR EL MANTENIMIENTO FITOSANITARIO DEL CULTIVO', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        Modulo::create(['id' =>  62, 'estusuario_id' => 2, 's_modulo' => 'HERRAMIENTAS, PROGRAMAS Y TÉCNICAS PARA LA ELABORACIÓN DE DIBUJOS Y PLANTILLAS', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'num_unidades' => 3]);
        
    }
}