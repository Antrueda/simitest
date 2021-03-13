<?php

use App\Models\fichaIngreso\FiDiscausa;
use App\Models\fichaIngreso\FiEventosMedico;
use App\Models\fichaIngreso\FiGeneracionIngreso;
use App\Models\fichaIngreso\FiDiasGeneraIngreso;
use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\fichaIngreso\FiSalud;
use App\Models\fichaIngreso\FiVictataq;
use Illuminate\Database\Seeder;

use App\Models\Sistema\SisNnaj;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FiRedApoyoActualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * llena de cedulas y de otros datos aleatorios la tabla fi_datos_basicos
     * @return void
     */
    public function run()
    {
        FiRedApoyoActual::create(['sis_nnaj_id' => 395,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'YANIRA DAVILA HIGUERA', 's_servicio' => 'VIVIENDA', 's_telefono' => '3144704056', 's_direccion' => 'CALLE 22 H #106-37', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-07 15:57:27', 'updated_at' => '2020-10-07 15:57:27',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 395,  'i_prm_tipo_red_id' => 1805, 's_nombre_persona' => 'URIEL NOVOA', 's_servicio' => 'IGLESIA', 's_telefono' => '3508988388', 's_direccion' => 'TINTAL', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-07 15:57:27', 'updated_at' => '2020-10-07 15:58:46',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 395,  'i_prm_tipo_red_id' => 547, 's_nombre_persona' => 'MISION CARISMATICA G12', 's_servicio' => 'ESPIRITUAL', 's_telefono' => '3212940573', 's_direccion' => 'CARRERA 30 CON AMERICAS', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-07 15:59:59', 'updated_at' => '2020-10-07 15:59:59',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 403,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'ADRIANA MARIA DAZA', 's_servicio' => 'APOYO EMOCIONAL', 's_telefono' => '3022214522', 's_direccion' => '', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 12:24:54', 'updated_at' => '2020-10-09 12:24:54',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 436,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'YORBIS MARICELA GONZALES MURILLO', 's_servicio' => 'VIVIENDA, ALLIMENTACION', 's_telefono' => '3202744960', 's_direccion' => 'CARRERA 18 N BIS #79-12 SUR', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 15:57:13', 'updated_at' => '2020-10-13 15:57:13',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 437,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'INES ELVIRA PORRAS', 's_servicio' => 'ALIMENTACION Y VIVIENDA', 's_telefono' => '3142149769', 's_direccion' => 'CARRERA 47 #73B-72 SUR', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 21:54:20', 'updated_at' => '2020-10-13 21:54:20',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 447,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'SANDRA RODRIGUEZ', 's_servicio' => 'MORAL', 's_telefono' => '3142120785', 's_direccion' => 'CRRA 18 Q N. 81 18 SUR', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:34:37', 'updated_at' => '2020-10-14 11:34:37',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 451,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'NUBIA YANET BUITRAGO MUÑOZ', 's_servicio' => 'COMIDA Y CASA', 's_telefono' => '3224583533', 's_direccion' => 'CLL 81 N. 18D-44 SUR', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 12:32:17', 'updated_at' => '2020-10-14 12:32:17',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 455,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'RUBIELA RONCANCIO', 's_servicio' => 'VIVIEMDA', 's_telefono' => '', 's_direccion' => '', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 13:27:53', 'updated_at' => '2020-10-14 13:27:53',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 455,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'RUBIELA RONCANCIO', 's_servicio' => 'VIVIENDA', 's_telefono' => '7652089', 's_direccion' => 'CLL 82B SUR 18 M 20', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 13:28:24', 'updated_at' => '2020-10-14 13:28:24',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 460,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'EMILSE VARGAS GONZALEZ', 's_servicio' => 'VIVIENDA', 's_telefono' => '3124569153', 's_direccion' => 'CLL 77 N. 18 L 62 SUR', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 15:28:15', 'updated_at' => '2020-10-14 15:28:15',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 463,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'OLGA LUCIA PARRA LEON', 's_servicio' => 'VIVIENDA', 's_telefono' => '3219997716', 's_direccion' => 'CLL 81 N. 18D-44 SUR', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 16:48:22', 'updated_at' => '2020-10-14 16:48:22',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 465,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'MARIA A RINCÓN', 's_servicio' => 'ALIMENTARIO', 's_telefono' => '3209969955', 's_direccion' => 'CRA 28 P N. 81 SUR 21', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 11:22:13', 'updated_at' => '2020-10-15 11:22:13',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 507,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'EDUARDO HERNANDEZ BOHORQUEZ', 's_servicio' => 'ALIMENTARIO', 's_telefono' => '3142323403', 's_direccion' => 'LUCERO', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:41:19', 'updated_at' => '2020-10-16 12:41:19',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 531,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'LEIDY J ZAROZO', 's_servicio' => 'ALIMENTARIO', 's_telefono' => '3203318507', 's_direccion' => 'GIRARDOT', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:11:20', 'updated_at' => '2020-10-16 16:11:20',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 538,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'YORBIS MARISELA GONZALEZ MURILLO', 's_servicio' => 'COMIDA Y CASA', 's_telefono' => '32027444960', 's_direccion' => 'CRA 18 N BIS N. 79-12 SUR', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:54:21', 'updated_at' => '2020-10-16 16:54:21',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 586,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'RUBIELA RONCANCIO CRUZ', 's_servicio' => 'VIVIENDA', 's_telefono' => '7658029', 's_direccion' => 'CALLE 82B #18M-20', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:16:31', 'updated_at' => '2020-10-21 11:16:31',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 642,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'ANDRES RICO', 's_servicio' => 'ALIMENTACION, VIVIENDA', 's_telefono' => '3209173928', 's_direccion' => '0', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 15:47:33', 'updated_at' => '2020-10-23 15:47:33',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 670,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'MARIA ISABEL VARGAS LEON', 's_servicio' => 'ALIMENTACION', 's_telefono' => '3229020342', 's_direccion' => 'CARRERA 18 B BIS #81-11 SUR', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 10:57:52', 'updated_at' => '2020-10-28 10:57:52',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 692,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'BLANCA CECILIA MORENO', 's_servicio' => 'ALIMENTACION', 's_telefono' => '3212920137', 's_direccion' => 'CALLE 81F #18G-22 SUR', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:24:12', 'updated_at' => '2020-10-28 14:24:12',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 697,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'PATIÑO OROZCO LUZ MARINA', 's_servicio' => 'APOYO EMOCIONAL', 's_telefono' => '3134023309', 's_direccion' => 'CRA 14 I N. 136-21', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:21:34', 'updated_at' => '2020-10-28 15:21:34',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 705,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'EMILIO CORNEJO NUBIA ESTER', 's_servicio' => 'APOYO EMOCIONAL', 's_telefono' => '3173901155', 's_direccion' => '', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:53:12', 'updated_at' => '2020-10-28 15:53:12',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 712,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'PINILLA LUIS ALFREDO', 's_servicio' => 'ALIMENTACION', 's_telefono' => '0', 's_direccion' => 'CARRERA 7 ESTE #90A-78 SUR', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 11:07:23', 'updated_at' => '2020-10-29 11:07:23',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 722,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'ZUÑIGA MARIA INES', 's_servicio' => 'ALIMENTACION', 's_telefono' => '3132971210', 's_direccion' => '0', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:37:07', 'updated_at' => '2020-10-29 12:37:07',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 724,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'ANDERSON CONDE SANCHEZ', 's_servicio' => 'NUTRE', 's_telefono' => '3012476310', 's_direccion' => '', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 14:11:32', 'updated_at' => '2020-10-29 14:11:32',]);
        FiRedApoyoActual::create(['sis_nnaj_id' => 727,  'i_prm_tipo_red_id' => 282, 's_nombre_persona' => 'GLORIA SARATE', 's_servicio' => 'ECONOMICO, EMOCIONAL', 's_telefono' => '3194708139', 's_direccion' => '', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 16:57:11', 'updated_at' => '2020-10-29 16:57:11',]);
    }
}
