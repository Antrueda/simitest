<?php

use Illuminate\Database\Seeder;
use App\Models\consulta\CsdRedsocPasado;

class CsdRedsocPasadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CsdRedsocPasado::create(['id'=>1,'csd_id'=>78, 'nombre'=>'IDIPRON', 'servicios'=>'APOYO INTEGRAL','cantidad'=>2, 'prm_unidad_id'=>401,'ano'=>2018,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>2,'csd_id'=>14, 'nombre'=>'ICBF', 'servicios'=>'PROTECCIÓN ','cantidad'=>3, 'prm_unidad_id'=>401,'ano'=>2018,'retiro'=>'CIERRE DE PROCESO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>3,'csd_id'=>19, 'nombre'=>'BOGOTA TE NUTRE SDIS', 'servicios'=>'APOYO ALIMENTARIO','cantidad'=>3, 'prm_unidad_id'=>401,'ano'=>2015,'retiro'=>'CULMINACIÓN PROCESO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>4,'csd_id'=>6, 'nombre'=>'FUNDACIÓN TRATAMIENTO CONSUMO DE SPA', 'servicios'=>'REHABILITACIÓN ','cantidad'=>8, 'prm_unidad_id'=>400,'ano'=>2017,'retiro'=>'ABANDONO DE PROCESO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>5,'csd_id'=>6, 'nombre'=>'ICBF', 'servicios'=>'SEGUIMIENTO CONSUMO','cantidad'=>6, 'prm_unidad_id'=>400,'ano'=>2019,'retiro'=>'CIERRE DE PROCESO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>6,'csd_id'=>16, 'nombre'=>'ICBF', 'servicios'=>'PROTECCIÓN ','cantidad'=>7, 'prm_unidad_id'=>400,'ano'=>2015,'retiro'=>'CIERRE DE PROCESO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>7,'csd_id'=>16, 'nombre'=>'NUEVO NACIMIENTO', 'servicios'=>'PROTECCIÓN ','cantidad'=>1, 'prm_unidad_id'=>400,'ano'=>2015,'retiro'=>'ABANDONO DE PROCESO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>8,'csd_id'=>36, 'nombre'=>'IDIPRON', 'servicios'=>'INTERNADO','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>2020,'retiro'=>'ACTUALMENTE', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>9,'csd_id'=>36, 'nombre'=>'INTEGRACION SOCIAL ', 'servicios'=>'HOGAR DE PASO ','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>2019,'retiro'=>'OPORTUNIDAD LABORAL', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>10,'csd_id'=>70, 'nombre'=>'COMISARIA DE FAMILIA', 'servicios'=>'CUSTODIA','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>2012,'retiro'=>'CUSTODIA OTORGADA', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>11,'csd_id'=>33, 'nombre'=>'SDIS', 'servicios'=>'APOYO ALIMENTARIO','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>2019,'retiro'=>'TRASLADO DE DOMICILIO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>12,'csd_id'=>33, 'nombre'=>'IDIPRON', 'servicios'=>'INTERNADO','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>'ACTUALMENTE ACTIVO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>13,'csd_id'=>66, 'nombre'=>'IDIPRON', 'servicios'=>'EDUCATIVOS','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>14,'csd_id'=>32, 'nombre'=>'ICBF', 'servicios'=>'ASESORIA JUIDICA','cantidad'=>3, 'prm_unidad_id'=>400,'ano'=>2016,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>15,'csd_id'=>32, 'nombre'=>'SDIS', 'servicios'=>'COMEDOR COMUNITARIO','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>2016,'retiro'=>'POR INTERNADO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>16,'csd_id'=>83, 'nombre'=>'IDIPRON', 'servicios'=>'INTERNADO','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>'ACTUALMENTE ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>17,'csd_id'=>25, 'nombre'=>'IDIPRON', 'servicios'=>'INTERNADO ','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>'ACTUALMENTE ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>18,'csd_id'=>28, 'nombre'=>'IDIPRON', 'servicios'=>'INTERNADO','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>19,'csd_id'=>29, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO','cantidad'=>5, 'prm_unidad_id'=>400,'ano'=>0,'retiro'=>'REINTEGRO A MEDIO FAMILIAR ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>20,'csd_id'=>85, 'nombre'=>'ICBF', 'servicios'=>'SEGUIMIENTO','cantidad'=>15, 'prm_unidad_id'=>1509,'ano'=>2016,'retiro'=>'CIERRE DE CASO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>21,'csd_id'=>48, 'nombre'=>'ICBF', 'servicios'=>'PARD','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>2015,'retiro'=>'CIERRE DEL PROCESO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>22,'csd_id'=>50, 'nombre'=>'APOYO PSICOSOCIAL', 'servicios'=>'APOYO PSICOSOCIAL','cantidad'=>6, 'prm_unidad_id'=>259,'ano'=>2019,'retiro'=>'FAMILIAR', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>23,'csd_id'=>54, 'nombre'=>'ICBF MEDDIDA DE PROTECCIÓN ', 'servicios'=>'PARD ','cantidad'=>4, 'prm_unidad_id'=>401,'ano'=>1998,'retiro'=>'CIERRE DE PROCESO 7 MEDIDA DE ADOPTABILIDAD ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>24,'csd_id'=>54, 'nombre'=>'COMISARIA DE FAMILIA ', 'servicios'=>'ORIENTACION FAMILIAR ','cantidad'=>1, 'prm_unidad_id'=>400,'ano'=>2012,'retiro'=>'SEGUIMIENTO / NEGLIGENCIA PARENTAL ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>25,'csd_id'=>54, 'nombre'=>'CENTRO PENITENCIARIO BUEN PASTOR ', 'servicios'=>'PRIVACION DE LA LIBERTAD','cantidad'=>8, 'prm_unidad_id'=>400,'ano'=>2019,'retiro'=>'PROCESO ABIERTO / DETENCIÓN DOMICILIARIA VIGENTE ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>26,'csd_id'=>10, 'nombre'=>'COMISARIA DE FAMILIA ', 'servicios'=>'ORIENTACIÓN- ATENCIÓN ','cantidad'=>2, 'prm_unidad_id'=>400,'ano'=>2002,'retiro'=>'CIERRE DEL PROCESO /PATERNIDAD CORRESPONSABILIDAD ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>27,'csd_id'=>10, 'nombre'=>'ICBF PROCESO JUDICIAL ', 'servicios'=>'PARD ATENCIÓN ','cantidad'=>2, 'prm_unidad_id'=>400,'ano'=>2019,'retiro'=>'PROCESO PENAL DE ADOLESCENTE PARD ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>28,'csd_id'=>8, 'nombre'=>'FAMILIAS EN ACCION', 'servicios'=>'ECONÓMICO','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>2019,'retiro'=>'CIERRE', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>29,'csd_id'=>8, 'nombre'=>'ICBF', 'servicios'=>'PSICOLÓGICO ','cantidad'=>2, 'prm_unidad_id'=>401,'ano'=>2017,'retiro'=>'TERMINO EL PROCESO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>30,'csd_id'=>13, 'nombre'=>'SAN GREGORIO', 'servicios'=>'INTERMEDIO','cantidad'=>1, 'prm_unidad_id'=>400,'ano'=>2018,'retiro'=>'EVASIÓN', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>31,'csd_id'=>51, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>2018,'retiro'=>'REINTEGRO FAMILIAR', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>32,'csd_id'=>15, 'nombre'=>'ICBF', 'servicios'=>'PARD','cantidad'=>8, 'prm_unidad_id'=>259,'ano'=>2017,'retiro'=>'CIRRE DEL PROCESO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>33,'csd_id'=>67, 'nombre'=>'FAMILIAS EN ACCIÓN', 'servicios'=>'FAMILIAS EN ACCIÓN','cantidad'=>8, 'prm_unidad_id'=>400,'ano'=>2006,'retiro'=>'CIRRE DEL PROCESO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>34,'csd_id'=>67, 'nombre'=>'COMEDOR COMUNITARIO', 'servicios'=>'COMEDOR COMUNITARIO','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>2007,'retiro'=>'ESTUDIO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>35,'csd_id'=>12, 'nombre'=>'COMEDOR COMUNITARIO', 'servicios'=>'ALIMENTACION','cantidad'=>6, 'prm_unidad_id'=>400,'ano'=>2013,'retiro'=>'CIERRE DEL COMEDOR ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>36,'csd_id'=>11, 'nombre'=>'ICBF', 'servicios'=>'PROTECCION','cantidad'=>8, 'prm_unidad_id'=>400,'ano'=>2012,'retiro'=>'CUMPLIMIENTO DE PROCESO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>37,'csd_id'=>43, 'nombre'=>'SDIS', 'servicios'=>'BONO AFRO','cantidad'=>3, 'prm_unidad_id'=>401,'ano'=>2017,'retiro'=>'VIGENTE', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>38,'csd_id'=>73, 'nombre'=>'SDIS', 'servicios'=>'BONO AFRO','cantidad'=>3, 'prm_unidad_id'=>401,'ano'=>2017,'retiro'=>'VIGENTE', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>39,'csd_id'=>63, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO ','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>0,'retiro'=>'REINTEGRO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>40,'csd_id'=>53, 'nombre'=>'ICBF', 'servicios'=>'CUSTODIA','cantidad'=>6, 'prm_unidad_id'=>400,'ano'=>2012,'retiro'=>'CUSTODIA', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>41,'csd_id'=>41, 'nombre'=>'IDIPRON', 'servicios'=>'INTERNADO','cantidad'=>2, 'prm_unidad_id'=>400,'ano'=>2017,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>42,'csd_id'=>29, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO','cantidad'=>5, 'prm_unidad_id'=>400,'ano'=>0,'retiro'=>'REINTEGRO A MEDIO FAMILIAR ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>43,'csd_id'=>52, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO','cantidad'=>7, 'prm_unidad_id'=>400,'ano'=>2014,'retiro'=>'REINTEGRO FAMILIAR', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>44,'csd_id'=>18, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO','cantidad'=>5, 'prm_unidad_id'=>400,'ano'=>2019,'retiro'=>'SOLICITUD DE RETIRO (PROGENITORES)', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>45,'csd_id'=>20, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO ','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>2017,'retiro'=>'REINTEGRO FAMILIAR', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>46,'csd_id'=>20, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO ','cantidad'=>8, 'prm_unidad_id'=>400,'ano'=>2018,'retiro'=>'REINTEGRO FAMILIAR', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>47,'csd_id'=>71, 'nombre'=>'ICBF', 'servicios'=>'PROTECCIÓN ','cantidad'=>2, 'prm_unidad_id'=>401,'ano'=>2017,'retiro'=>'RETIRO POR TERMINACION DE PROCESO. ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>48,'csd_id'=>57, 'nombre'=>'IDIPRON ', 'servicios'=>'INTERNADO ','cantidad'=>4, 'prm_unidad_id'=>401,'ano'=>2014,'retiro'=>'CONTINUAN', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>49,'csd_id'=>90, 'nombre'=>'ICBF', 'servicios'=>'CUSTODIA','cantidad'=>1, 'prm_unidad_id'=>400,'ano'=>2020,'retiro'=>'CUSTODIA DE SHARITH', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>50,'csd_id'=>75, 'nombre'=>'IDIPRON ', 'servicios'=>'INTERNADO ','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>2018,'retiro'=>'CONTINUAN', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>51,'csd_id'=>75, 'nombre'=>'RENACER', 'servicios'=>'MODELO PEDAGOGICO','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>52,'csd_id'=>23, 'nombre'=>'IDIPRON ', 'servicios'=>'INTERNADO ','cantidad'=>9, 'prm_unidad_id'=>401,'ano'=>2011,'retiro'=>'ACTUALMENTE POR HIJO MENOR', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>53,'csd_id'=>31, 'nombre'=>'FAMILIAS EN ACCIÓN ', 'servicios'=>'BONO ALIMENTARIO','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>54,'csd_id'=>17, 'nombre'=>'CIUDADELA DE LA NIÑA', 'servicios'=>'INTEGRAL','cantidad'=>8, 'prm_unidad_id'=>400,'ano'=>2018,'retiro'=>'EVASION', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>55,'csd_id'=>79, 'nombre'=>'CIUDADELA DE LA IÑA', 'servicios'=>'INTEGRAL ','cantidad'=>6, 'prm_unidad_id'=>400,'ano'=>2018,'retiro'=>'EVASIÓN', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>56,'csd_id'=>42, 'nombre'=>'HOSPITAL VSTA HERMOSA', 'servicios'=>'PSIQUIATRICOS','cantidad'=>3, 'prm_unidad_id'=>400,'ano'=>0,'retiro'=>'DESMOTIVACION', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>57,'csd_id'=>22, 'nombre'=>'INPEC', 'servicios'=>'PRIVADO DE LA LIBERTAD','cantidad'=>4, 'prm_unidad_id'=>401,'ano'=>2016,'retiro'=>'VIGENTE', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>58,'csd_id'=>47, 'nombre'=>'NO REFIERE', 'servicios'=>'NO REFIERE','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>59,'csd_id'=>37, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO ','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>0,'retiro'=>'REINTEGRO ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>60,'csd_id'=>81, 'nombre'=>'NO REFIERE', 'servicios'=>'NO REFIERE','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>61,'csd_id'=>1, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO','cantidad'=>3, 'prm_unidad_id'=>400,'ano'=>2018,'retiro'=>'POR IDENTIFICACION', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>62,'csd_id'=>89, 'nombre'=>'ICBF', 'servicios'=>'CUSTODIA','cantidad'=>3, 'prm_unidad_id'=>400,'ano'=>2017,'retiro'=>'CUSTODIA', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>63,'csd_id'=>91, 'nombre'=>'ICBF', 'servicios'=>'INTERNADO','cantidad'=>11, 'prm_unidad_id'=>400,'ano'=>2018,'retiro'=>'RESTABLECIMIENTO DE DERECHOS', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>64,'csd_id'=>62, 'nombre'=>'ICBF', 'servicios'=>'RESTABLECIMIENTO DE DE DERECHOS','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>2018,'retiro'=>'CONTINUAN', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>65,'csd_id'=>45, 'nombre'=>'COMISARIA', 'servicios'=>'VIF','cantidad'=>1, 'prm_unidad_id'=>400,'ano'=>2020,'retiro'=>'APOYO PSICOSOCIAL', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>66,'csd_id'=>59, 'nombre'=>'INTEGRACION SOCIAL-YISEL', 'servicios'=>'MERCADO','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>2016,'retiro'=>'SE ACABO EL PROCESO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>67,'csd_id'=>43, 'nombre'=>'SDIS', 'servicios'=>'BONO AFRO','cantidad'=>3, 'prm_unidad_id'=>401,'ano'=>2017,'retiro'=>'VIGENTE', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>68,'csd_id'=>65, 'nombre'=>'FAMILIAS EN ACCION', 'servicios'=>'ECONOMICOS','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>69,'csd_id'=>76, 'nombre'=>'NO REFIERE', 'servicios'=>'NO REFIERE','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>70,'csd_id'=>57, 'nombre'=>'IDIPRON ', 'servicios'=>'INTERNADO ','cantidad'=>4, 'prm_unidad_id'=>401,'ano'=>2014,'retiro'=>'CONTINUAN', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>71,'csd_id'=>64, 'nombre'=>'IDIPRON-ALVARO', 'servicios'=>'EXTERNADO','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>72,'csd_id'=>64, 'nombre'=>'7', 'servicios'=>' ','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>73,'csd_id'=>64, 'nombre'=>'8', 'servicios'=>' ','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>0,'retiro'=>' ', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>74,'csd_id'=>24, 'nombre'=>'IDIPRON-SHARICK', 'servicios'=>'INTERNADO','cantidad'=>2, 'prm_unidad_id'=>401,'ano'=>2019,'retiro'=>'EGRESO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>75,'csd_id'=>92, 'nombre'=>'ICBF-MIGUEL', 'servicios'=>'CUSTODIA','cantidad'=>0, 'prm_unidad_id'=>259,'ano'=>2018,'retiro'=>'ASIGNACION DE CUSTODIA-PARD CERRADO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        CsdRedsocPasado::create(['id'=>76,'csd_id'=>27, 'nombre'=>'IDIPRON-YURI', 'servicios'=>'INTERNADO','cantidad'=>1, 'prm_unidad_id'=>401,'ano'=>2005,'retiro'=>'EGRESO', 'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'prm_tipofuen_id'=>2316]);
        
    }
}
