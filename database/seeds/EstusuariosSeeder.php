<?php

use App\Models\Usuario\Estusuario;
use Illuminate\Database\Seeder;

class EstusuariosSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estusuario::create(['estado' => 'CREACION USUARIO NUEVO,PERMISOS SEGUN CARGO PROFESIONAL Y SE RESTAURA CLAVE', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 1
        Estusuario::create(['estado' => 'TERMINACIÓN DE CONTRATO', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '2', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-07-27T17:02:40.000000Z',]); // 2
        Estusuario::create(['estado' => 'CARGO NUEVO SEGUN CONTRATO', 'prm_formular_id' => '2326', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 3
        Estusuario::create(['estado' => 'CARGO DESIGNADO POR LIDER AREA', 'prm_formular_id' => '2326', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 4
        Estusuario::create(['estado' => 'ACCIONES REALIZADAS EQUIPO PSICOSOCIAL OTRAS UPIS DIFERENTE A LA UPI DE ORIGEN', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 5
        Estusuario::create(['estado' => 'Q.E.D.P.', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-06-18T22:46:37.000000Z',]); // 6
        Estusuario::create(['estado' => 'FINALIZACION VINCULACION CON EL IDIPRON', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-06-18T22:50:42.000000Z',]); // 7
        Estusuario::create(['estado' => 'SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURA CLAVE', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 8
        Estusuario::create(['estado' => 'CAMBIO DE NOMBRE', 'prm_formular_id' => '2327', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 9
        Estusuario::create(['estado' => 'CAMBIO DE NOMBRE UPI', 'prm_formular_id' => '2327', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 10
        Estusuario::create(['estado' => 'CAMBIO NOMBRE AREA', 'prm_formular_id' => '2328', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 11
        Estusuario::create(['estado' => 'ACTUALIZACION AREA', 'prm_formular_id' => '2328', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 12
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2328', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 13
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2480', 'user_crea_id' => '1', 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-12-28T17:49:41.000000Z',]); // 14
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2481', 'user_crea_id' => '1', 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-12-28T17:50:50.000000Z',]); // 15
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2498', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 16
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2499', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 17
        Estusuario::create(['estado' => 'ADICIÓN CONTRATO Y SE RESTAURA LA CLAVE', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 18
        Estusuario::create(['estado' => 'SE DA PERMISO A OTRA UPI O AC, DIFERENTE A LA DE ORIGEN PARA SUBIR REGISTRO DE ATENCIONES REALIZADAS Y/O JORNADA INGRESO', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 19
        Estusuario::create(['estado' => 'SE DA PERMISO UNA SEMANA MAS TERMINADO EL CONTRATO PARA QUEDAR A PAZ Y SALVO-SIMI SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURAR CLAVE', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 20
        Estusuario::create(['estado' => 'VERIFICACION DE INFORMACION-FORMATO 015 GESTION DE USUARIOS', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 21
        Estusuario::create(['estado' => 'PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 22
        Estusuario::create(['estado' => 'PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 23
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2501', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 24
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2500', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 25
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2505', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 26
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2504', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 27
        Estusuario::create(['estado' => 'NUEVO REGISTRO', 'prm_formular_id' => '2509', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 28
        Estusuario::create(['estado' => 'CAMBIO DE UPI A LOS PROFESIONALES Y/O SE RESTAURA LA CLAVE', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 29
        Estusuario::create(['estado' => 'SUSCRIPCION NUEVO CONTRATO Y/O SE RESTAURA CLAVE', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 30
        Estusuario::create(['estado' => 'DAR PERMISO VARIAS UPIS-SOLICITUD RESPONSABLE UPI/ AREA/DEPENDENCIA', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 31
        Estusuario::create(['estado' => 'SESION CONTRATO DE OTRO PROFESIONAL', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-06-18T22:49:00.000000Z',]); // 32
        Estusuario::create(['estado' => 'SUSCRIPCION PRACTICA Y/O SE RESTAURA CLAVE', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 33
        Estusuario::create(['estado' => 'RESTAURACION CLAVE', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 34
        Estusuario::create(['estado' => 'INGRESO PERIODO DE VACACIONES Y/O SE RESTAURA CLAVE', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 35
        Estusuario::create(['estado' => 'ENCARGO VACACIONES', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-06-18T22:49:46.000000Z',]); // 36
        Estusuario::create(['estado' => 'PERMISO CARGUE DE INFORMACION SIMI POR PARTE DE SUBMETODOS', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 37
        Estusuario::create(['estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => '2504', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 38
        Estusuario::create(['estado' => 'CREACION ESTADO POR LIDER AREA Y CONTEXTOS', 'prm_formular_id' => '2499', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 39
        Estusuario::create(['estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => '2499', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 40
        Estusuario::create(['estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => '2505', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 41
        Estusuario::create(['estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => '2498', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 42
        Estusuario::create(['estado' => 'SE REQUIERE SUBTEMA EN EL TALLER EDUCATIVO Y/O ACCION FORMATIVA', 'prm_formular_id' => '2505', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 43
        Estusuario::create(['estado' => 'EQUIVOCACIÓN AL CRER EL PARÁMETRO', 'prm_formular_id' => '2504', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 44
        Estusuario::create(['estado' => 'EQUIVOCACIÓN AL CRER EL PARÁMETRO.', 'prm_formular_id' => '2505', 'user_crea_id' => '1', 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-10-20T22:56:34.000000Z',]); // 45
        Estusuario::create(['estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => '2482', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 46
        Estusuario::create(['estado' => 'EQUIVOCACIÓN AL CRER EL PARÁMETRO', 'prm_formular_id' => '2482', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 47
        Estusuario::create(['estado' => 'EQUIVOCACIÓN AL CRER EL PARÁMETRO', 'prm_formular_id' => '2483', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 48
        Estusuario::create(['estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => '2483', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 49
        Estusuario::create(['estado' => 'ERROR DE ACTIVACIÓN', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-04-27T16:57:04.000000Z', 'updated_at' => '2021-04-27T16:57:04.000000Z',]); // 50
        Estusuario::create(['estado' => 'ACCESO AL NUEVO SISTEMA', 'prm_formular_id' => '2325', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2021-05-05T03:53:26.000000Z', 'updated_at' => '2021-05-05T03:53:26.000000Z',]); // 51
        Estusuario::create(['estado' => 'CREACIÓN PARÁMETRO A SOLICITUD DE LAS UPIS-DEPENDENCIAS', 'prm_formular_id' => '2509', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2021-05-05T05:53:20.000000Z', 'updated_at' => '2021-05-05T05:53:20.000000Z',]); // 52
        Estusuario::create(['estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => '2327', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2021-05-12T03:43:53.000000Z', 'updated_at' => '2021-05-12T03:43:53.000000Z',]); // 53
        Estusuario::create(['estado' => 'CREACION PARAMETRO APROBADO POR STMEO', 'prm_formular_id' => '2326', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2021-05-12T03:57:01.000000Z', 'updated_at' => '2021-05-12T03:57:01.000000Z',]); // 54
        Estusuario::create(['estado' => 'CREACION PARAMETRO APROBADO POR STMEO', 'prm_formular_id' => '2351', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2021-05-12T03:58:37.000000Z', 'updated_at' => '2021-05-12T03:58:37.000000Z',]); // 55
        Estusuario::create(['estado' => 'MAL REGISTRO', 'prm_formular_id' => '2504', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-06-24T05:41:13.000000Z', 'updated_at' => '2021-06-24T05:41:13.000000Z',]); // 56
        Estusuario::create(['estado' => 'SOLCITUD DE LA UPI/DEPENDENCIA', 'prm_formular_id' => '2509', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-07-01T14:44:58.000000Z', 'updated_at' => '2021-07-01T14:44:58.000000Z',]); // 57
        Estusuario::create(['estado' => 'UPI SIN SERVICIO', 'prm_formular_id' => '2327', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '2', 'created_at' => '2021-07-03T11:28:13.000000Z', 'updated_at' => '2021-07-03T11:28:13.000000Z',]); // 58
        Estusuario::create(['estado' => 'SIN ATENCIÒN', 'prm_formular_id' => '2327', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '2', 'created_at' => '2021-07-03T14:53:10.000000Z', 'updated_at' => '2021-07-03T14:53:10.000000Z',]); // 59
        Estusuario::create(['estado' => 'A SOLICITUD DE LAS UPIS-DEPENDENCIAS', 'prm_formular_id' => '2509', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-07-16T17:05:54.000000Z', 'updated_at' => '2021-07-16T17:05:54.000000Z',]); // 60
        Estusuario::create(['estado' => 'TRASLADO INFORMACIÓN SIMI VIGENTE A PRODUCCIÓN', 'prm_formular_id' => '2327', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2021-07-28T16:25:01.000000Z', 'updated_at' => '2021-07-28T16:25:01.000000Z',]); // 61
        Estusuario::create(['estado' => 'TRASLADO INFORMACIÓN SIMI VIGENTE A PRODUCCIÓN', 'prm_formular_id' => '2325', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2021-07-28T16:31:21.000000Z', 'updated_at' => '2021-07-28T16:31:21.000000Z',]); // 62
        Estusuario::create(['estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => '2499', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2021-09-22T00:56:16.000000Z', 'updated_at' => '2021-09-22T00:56:16.000000Z',]); // 63
        Estusuario::create(['estado' => 'SE HABILITA SIMI POR MOTIVO SUSPENSIÓN CONTRATO', 'prm_formular_id' => '2325', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2021-09-22T21:59:53.000000Z', 'updated_at' => '2021-09-22T21:59:53.000000Z',]); // 64
        Estusuario::create(['estado' => 'ERROR', 'prm_formular_id' => '2499', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '2', 'created_at' => '2021-10-14T17:45:26.000000Z', 'updated_at' => '2021-10-14T17:45:26.000000Z',]); // 65
        Estusuario::create(['estado' => 'CAMBIO NOMBRE ROL', 'prm_formular_id' => '2326', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2021-11-03T17:34:56.000000Z', 'updated_at' => '2021-11-03T17:34:56.000000Z',]); // 66
        Estusuario::create(['estado' => 'REVISADO Y APROBADO POR LA STMEO', 'prm_formular_id' => '2500', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2021-12-28T17:37:27.000000Z', 'updated_at' => '2021-12-28T17:37:27.000000Z',]); // 67
        Estusuario::create(['estado' => 'CREACION RECURSOS', 'prm_formular_id' => '2687', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', 'created_at' => '2022-01-03T15:27:56.000000Z', 'updated_at' => '2022-01-03T15:27:56.000000Z',]); // 68
        Estusuario::create(['estado' => 'SE AJUSTA POR SOLICITUD DEL ÁREA Y/O DEPENDENCIA', 'prm_formular_id' => '2351', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '1', 'created_at' => '2022-01-04T20:26:04.000000Z', 'updated_at' => '2022-01-04T20:26:04.000000Z',]); // 69
        Estusuario::create(['estado' => 'SE BLOQUEA POR SOLICITUD DEL ÁREA Y/O DEPENDENCIA', 'prm_formular_id' => '2351', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => '2', 'created_at' => '2022-01-04T20:28:58.000000Z', 'updated_at' => '2022-01-04T20:29:27.000000Z',]); // 70
    }
}
