<?php

use App\Models\fichaobservacion\FosStse;
use Illuminate\Database\Seeder;

class FosStsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FosStse::create([ 'id'=>1, 'nombre'=>'NO APLICA', 'estusuario_id'=>49, 'descripcion'=>'NO APLICA', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>2, 'nombre'=>'SALUD (GISA)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON ENTIDADES PRESTADORAS DEL SISTEMA DE SALUD (EPS O RED HOSPITALARIA).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>3, 'nombre'=>'SDIS (GISD)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL (REFERENCIACIÓN, ORIENTACIÓN Y/O VINCULACIÓN) QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON LA SECRETARIA SOCIAL (SDIS).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>4, 'nombre'=>'ICBF (GIIC)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL (REFERENCIACIÓN, ORIENTACIÓN Y/O VINCULACIÓN) QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON EL INSTITUTO COLOMBIANO DE BIENESTAR FAMILIAR.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>5, 'nombre'=>'EDUCACIÓN (GIED)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL (REFERENCIACIÓN, ORIENTACIÓN Y/O VINCULACIÓN) QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON LA SECRETARIA DE EDUCACIÓN (DIRECCIÓN LOCAL DE EDUCACIÓN- DILE).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>6, 'nombre'=>'SECRETARIA DE LA MUJER (GISM)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL (REFERENCIACIÓN, ORIENTACIÓN Y/O VINCULACIÓN) QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON LA SECRETARIA DE LA MUJER.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>7, 'nombre'=>'COMISARIA DE FAMILIA (GICF)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL (REFERENCIACIÓN, ORIENTACIÓN Y/O VINCULACIÓN) QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON LA COMISARIA DE FAMILIA.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>8, 'nombre'=>'REGISTRADURIA (GIRE)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL (REFERENCIACIÓN, ORIENTACIÓN Y/O VINCULACIÓN) QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON LA REGISTRADURIA NACIONAL.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>9, 'nombre'=>'ONG (GONG)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL (REFERENCIACIÓN, ORIENTACIÓN Y/O VINCULACIÓN) QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON LAS ONG (ORGANIZACIONES NO GUBERNAMENTALES). REFERENCIAR EN LA DESCRIPCIÓN LA ORGANIZACIÓN Y SERVICIO.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>10, 'nombre'=>'SALUD (AISA)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ A OTRAS INSTITUCIONES DEL SISTEMA DE SALUD SIN QUE EL PROFESIONAL REALICE ALGÚN TIPO DE ARTICULACIÓN O VINCULACIÓN.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>11, 'nombre'=>'SDIS (AISD)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ CON LA SECRETARIA DE INTEGRACIÓN SOCIAL, SIN QUE EL PROFESIONAL REALICE ALGÚN TIPO DE ARTICULACIÓN O VINCULACIÓN.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>12, 'nombre'=>'ICBF (AIIC)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ CON EL INSTITUTO COLOMBIANO DE BIENESTAR FAMILIAR (ICBF), SIN QUE EL PROFESIONAL REALICE ALGÚN TIPO DE ARTICULACIÓN O VINCULACIÓN.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>13, 'nombre'=>'EDUCACION (AIED)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ A LA SECRETARIA DE EDUCACIÓN, SIN QUE EL PROFESIONAL REALICE ALGÚN TIPO DE ARTICULACIÓN O VINCULACIÓN.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>14, 'nombre'=>'SECRETRÍA DE LA MUJER (AISM)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ A LA SECRETARIA DE LA MUJER, SIN QUE EL PROFESIONAL REALICE ALGÚN TIPO DE ARTICULACIÓN O VINCULACIÓN.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>15, 'nombre'=>'COMISARIA DE FAMILIA (AICF)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ A LA COMISARIA DE FAMILIA, SIN QUE EL PROFESIONAL REALICE ALGÚN TIPO DE ARTICULACIÓN O VINCULACIÓN.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>16, 'nombre'=>'REGISTRADURIA (AIRE)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ A LA REGISTRADURIA NACIONAL, SIN QUE EL PROFESIONAL REALICE ALGÚN TIPO DE ARTICULACIÓN O VINCULACIÓN.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>17, 'nombre'=>'ONG (AONG)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ A (ORGANIZACIONES NO GUBERNAMENTALES) ONG, SIN QUE EL PROFESIONAL REALICE ALGÚN TIPO DE ARTICULACIÓN O VINCULACIÓN.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>18, 'nombre'=>'DE TRABAJO SOCIAL A NNAJ (AANJ)', 'estusuario_id'=>49, 'descripcion'=>'SE CREA EL CRITERIO DE CARGUE PARA QUE EL PROFESIONAL EN TRABAJO SOCIAL REGISTE ATENCIÓN REALIZADA A EL/LA NNAJ RESPECTO A INFORMACIÓN, ORIENTACIÓN Y SEGUIMIENTO INMEDIATO.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>19, 'nombre'=>'PSICOLÓGICAS A NNAJ (APNJ)', 'estusuario_id'=>49, 'descripcion'=>'SE CREA EL CRITERIO DE CARGUE PARA QUE EL PROFESIONAL EN PSICOLOGÍA REGISTE ATENCIÓN REALIZADA CON EL NNAJ RESPECTO A INFORMACIÓN, ORIENTACIÓN Y SEGUIMIENTO INMEDIATO.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>20, 'nombre'=>'PSICOLÓGICAS (AAPF)', 'estusuario_id'=>49, 'descripcion'=>'SE CREA EL CRITERIO DE CARGUE PARA QUE EL PROFESIONAL EN PSICOLOGÍA REGISTE ATENCIÓN REALIZADA CON LA FAMILIA O REDES DE APOYO DEL NNAJ RESPECTO A INFORMACIÓN, ORIENTACIÓN Y SEGUIMIENTO INMEDIATO.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>21, 'nombre'=>'DE TRABAJO SOCIAL FAMILIA (ATSF)', 'estusuario_id'=>49, 'descripcion'=>'SE CREA EL CRITERIO DE CARGUE PARA QUE EL PROFESIONAL EN TRABAJO SOCIAL REGISTE ATENCIÓN REALIZADA CON LA FAMILIA Y/O REDES DE APOYO NNAJ RESPECTO A INFORMACIÓN, ORIENTACIÓN Y SEGUIMIENTO INMEDIATO.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>22, 'nombre'=>'PROCESO TERAPÉUTICO (CTPT)', 'estusuario_id'=>49, 'descripcion'=>'SE CREA CRITERIO DE REGISTRO, APLICA PARA NNA QUE CUENTAN CON PROCESO ADMINISTRATIVO DE RESTABLECIMIENTO DE DERECHOS (PARD), LA ACCIÓN HACE REFERENCIA A LA PARTICIPACIÓN DEL EQUIPO SICOSOCIAL DEL IDIPRON EN EL COMITÉ TÉCNICO CONVOCADO Y EJECUTADO POR EL DEFENSOR DE FAMILIA Y EQUIPO INTERDISCIPLINAR DEL ICBF, AQUÍ SE DEFINE SI EL NNA REQUIERE ACTIVACIÓN DE REDES EN PROCESO TERAPÉUTICO SIGUIENDO LOS LINEAMIENTOS QUE ESTABLEZCA EL ICBF.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>23, 'nombre'=>'REINTEGRO FAMILIAR (CTRF)', 'estusuario_id'=>49, 'descripcion'=>'SE CREA CRITERIO DE REGISTRO DE ACCIONES QUE APLICAN PARA NNA QUE CUENTAN CON PROCESO ADMINISTRATIVO DE RESTABLECIMIENTO DE DERECHOS (PARD), EL EQUIPO PSICOSOCIAL DE LA UNIDAD PARTICIPA JUNTO AL EQUIPO DE LA DEFENSORÍA Y DEFENSOR DE FAMILIA DE ICBF, EN LA EVALUACIÓN DEL PROCESO Y SEGUIMIENTO A LOS NNA RESPECTO A REINTEGRO FAMILIAR DEL NNA, SE OBTIENE COMO EVIDENCIA LA BOLETA DE EGRESO DEL ICBF PARA DAR REINTEGRO FAMILIAR.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>24, 'nombre'=>'CAMBIO DE INSTITUCIÓN (CTCI)', 'estusuario_id'=>49, 'descripcion'=>'SE CREA CRITERIO DE REGISTRAR ACCIONES QUE APLICAN PARA NNA QUE CUENTAN CON PROCESO ADMINISTRATIVO DE RESTABLECIMIENTO DE DERECHOS (PARD), EL EQUIPO PSICOSOCIAL DE LA UNIDAD PARTICIPA JUNTO AL EQUIPO DE LA DEFENSORÍA Y DEFENSOR DE FAMILIA DE ICBF, EN LA EVALUACIÓN DE CAMBIO DE INSTITUCIÓN, ES DECIR QUE NO CONTINÚE CON LA VINCULACIÓN EN EL IDIPRON.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>25, 'nombre'=>'SEGUIMIENTO PROCESOS (CTSP)', 'estusuario_id'=>49, 'descripcion'=>'APLICA PARA NNA QUE CUENTAN CON PROCESO ADMINISTRATIVO DE RESTABLECIMIENTO DE DERECHOS (PARD), EL EQUIPO PSICOSOCIAL DE LA UNIDAD PARTICIPA JUNTO AL EQUIPO DE LA DEFENSORÍA Y DEFENSOR DE FAMILIA DE ICBF, EN LA EVALUACIÓN DEL PROCESO Y SEGUIMIENTO A LOS NNA RESPECTO A CONTINUIDAD EN EL IDIPRON, DE ACUERDO A LAS NECESIDADES DE LOS MISMOS.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>26, 'nombre'=>'SALUD (AITS)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ AL ÁREA DE DERECHOS DEL IDIPRON (SALUD-COMPONENTE MITIGACIÓN).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>27, 'nombre'=>'SOCIO LEGAL (ACSO)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ AL ÁREA DE DERECHOS DEL IDIPRON (SOCIOLEGAL).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>28, 'nombre'=>'EDUCACION (AITE)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ AL ÁREA DE DERECHOS DEL IDIPRON (EDUCACIÓN).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>29, 'nombre'=>'EMPRENDER (ACEM)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ AL ÁREA DE DERECHOS DEL IDIPRON (EMPREDER).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>30, 'nombre'=>'ESPIRITUALIDAD (ACES)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ AL ÁREA DE DERECHOS DEL IDIPRON (ESPIRITUALIDAD).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>31, 'nombre'=>'SALUD (GIAS)', 'estusuario_id'=>49, 'descripcion'=>'SON TODAS LAS GESTIONES Y ARTICULACIONES QUE REALIZA EL EQUIPO PSICOSOCIAL CON EL ÁREA DE DERECHOS DEL IDIPRON (SALUD-COMPONENTE MITIGACIÓN).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>32, 'nombre'=>'SOCIO LEGAL (GISL)', 'estusuario_id'=>49, 'descripcion'=>'SON TODAS LAS GESTIONES Y ARTICULACIONES QUE REALIZA EL EQUIPO PSICOSOCIAL CON EL ÁREA DE DERECHOS DEL IDIPRON (SALUD-COMPONENTE MITIGACIÓN).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>33, 'nombre'=>'EDUCACION (GIAE)', 'estusuario_id'=>49, 'descripcion'=>'SON TODAS LAS GESTIONES Y ARTICULACIONES QUE REALIZA EL EQUIPO PSICOSOCIAL CON EL ÁREA DE DERECHOS DEL IDIPRON (EDUCACIÓN).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>34, 'nombre'=>'EMPRENDER (GIEM)', 'estusuario_id'=>49, 'descripcion'=>'SON TODAS LAS GESTIONES Y ARTICULACIONES QUE REALIZA EL EQUIPO PSICOSOCIAL CON EL ÁREA DE DERECHOS DEL IDIPRON (EMPRENDER).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>35, 'nombre'=>'ESPIRITUALIDAD (GIES)', 'estusuario_id'=>49, 'descripcion'=>'SON TODAS LAS GESTIONES Y ARTICULACIONES QUE REALIZA EL EQUIPO PSICOSOCIAL CON EL ÁREA DE DERECHOS DEL IDIPRON (ESPIRITUALIDAD).', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>36, 'nombre'=>'JUDICIALES (GIJU)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL (REFERENCIACIÓN, ORIENTACIÓN O VINCULACIÓN) QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGIA O TRABAJO SOCIAL) CON ENTIDADES JUDICIALES TALES COMO SE MENCIONA EN LA "ESTRUCTURA GENERAL DE LA ADMINISTRACION DE JUSTICIA" DE 2018: 1. CONSEJO DE ESTADO, 2. TRIBUNALES ADMINISTRATIVOS, 3. JUZGADOS ADMINISTRATIVOS, C) DE LA JURISDICCIÓN CONSTITUCIONAL: 1. CORTE CONSTITUCIONAL; D) DE LA JURISDICCIÓN DE PAZ: JUECES DE PAZ. 2. LA FISCALÍA GENERAL DE LA NACIÓN. 3. EL CONSEJO SUPERIOR DE LA JUDICATURA.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>37, 'nombre'=>'OTRAS INSTITUCIONES (GIOI)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL (REFERENCIACIÓN, ORIENTACIÓN O VINCULACIÓN) QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON SISBEN, MOVILIDAD, DEFENSORÍA DEL PUEBLO, IDIGER, IPES, ALCALDÍAS LOCALES, SECRETARIAS DISTRITALES DEL HÁBITAT, HACIENDA, DESARROLLO ECONÓMICA, DE SEGURIDAD, CONVIVENCIA Y JUSTICIA, DE CULTURA, RECREACIÓN Y DEPORTE (IDRD), DEFENSORÍA DEL ESPACIO PÚBLICO, PERSONERÍA, SECRETARIA DE GOBIERNO, HACIENDA, PLANEACIÓN Y/O CATASTRO.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>38, 'nombre'=>'JUDICIALES (AIJU)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ A ENTIDADES JUDICIALES TALES COMO SE MENCIONA EN LA "ESTRUCTURA GENERAL DE LA ADMINISTRACION DE JUSTICIA" DE 2018: 1. CONSEJO DE ESTADO, 2. TRIBUNALES ADMINISTRATIVOS, 3. JUZGADOS ADMINISTRATIVOS, C) DE LA JURISDICCIÓN CONSTITUCIONAL: 1. CORTE CONSTITUCIONAL; D) DE LA JURISDICCIÓN DE PAZ: JUECES DE PAZ. 2. LA FISCALÍA GENERAL DE LA NACIÓN. 3. EL CONSEJO SUPERIOR DE LA JUDICATURA.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>39, 'nombre'=>'OTRAS INSTITUCIONES (AIOI)', 'estusuario_id'=>49, 'descripcion'=>'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ AL: SISBEN, MOVILIDAD, DEFENSORÍA DEL PUEBLO, IDIGER, IPES, ALCALDÍAS LOCALES, SECRETARIAS DISTRITALES DEL HÁBITAT, HACIENDA, DESARROLLO ECONÓMICA, DE SEGURIDAD, CONVIVENCIA Y JUSTICIA, DE CULTURA, RECREACIÓN Y DEPORTE (IDRD), DEFENSORÍA DEL ESPACIO PÚBLICO, PERSONERÍA, SECRETARIA DE GOBIERNO, HACIENDA, PLANEACIÓN Y/O CATASTRO.', 'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>40, 'nombre'=>'INASISTENCIA (SGIN)', 'estusuario_id'=>49, 'descripcion'=>'LO CONSTITUYEN CADA UNA DE LAS ACCIONES QUE SE REALIZAN UNA VEZ PRESENTADA LA NO ASISTENCIA DEL NNAJ POR UN PERIODO MENOR O IGUAL A UN (1) MES A LA UPI MODALIDAD INTERNADO, MENOR O IGUAL A 45 DÍAS A LA UPI MODALIDAD EXTERNADO Y NO MAYOR A 1 SEMANA A LA UPI RIESGO ESCNNA MODALIDAD EXTERNADO, BUSCANDO ESTABLECER CONDICIONES DE LOS NNAJ ASÍ COMO LA POSIBILIDAD DE RETORNO A LAS UNIDADES O LA PERTINENCIA DE TRÁMITE DE EGRESO CON LAS GESTIONES INTRA E INTER INSTITUCIONALES A QUE HUBIERE LUGAR PARA GARANTIZAR SU GOCE DE DERECHOS (CONSULTADO EN MANUAL DE PROCESOS Y PROCEDIMIENTOS: M-MSL-PR-001, M-MSL-PR-002 Y M-SEG-IN-001).', 'user_crea_id'=>861, 'user_edita_id'=>861, 'sis_esta_id'=>1 ]);
        FosStse::create([ 'id'=>41, 'nombre'=>'TELEFÓNICO (TAST)', 'estusuario_id'=>49, 'descripcion'=>'CUANDO SE ESTABLECE CONTACTO TELEFÓNICO CON LA FAMILIA Y/O EL NNAJ PARA DAR INFORMACIÓN DEL PROCESO, REALIZAR CONVOCATORIA A EVENTOS, ENCUENTROS FAMILIARES; ASÍ COMO LA COMUNICACIÓN QUE EL NNAJ ESTABLECE CON SU RED DE APOYO FAMILIAR CON EL FIN DE FORTALECIMIENTO DEL VÍNCULO.', 'user_crea_id'=>861, 'user_edita_id'=>861, 'sis_esta_id'=>1 ]);
    }
}
