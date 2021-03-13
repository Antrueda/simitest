<?php

use App\Models\Tema;
use Illuminate\Database\Seeder;

class TemasTableSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        foreach ($dataxxxx as $key => $value) {
            Tema::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => strtoupper($value['nombrexx'])])->id;
        }

    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx =[
            ['nombrexx' => 'ORDEN SUCESORAL'],// 1
            ['nombrexx' => 'DOCUMENTO SOPORTE POLIZA'],// 2
            ['nombrexx' => 'TIPO DE DOCUMENTO'],// 3
            ['nombrexx' => 'TIPO TIEMPO'],// 4
            ['nombrexx' => 'AM/PM'],// 5
            ['nombrexx' => 'FRECUENCIA VSI'],// 6
            ['nombrexx' => 'VIOLENCIA DISCRIMINACIÓN'],// 7
            ['nombrexx' => 'FRECUENCIA DE CONSUMO DE ALIMENTOS'],// 8
            ['nombrexx' => 'ALIMENTOS'],// 9
            ['nombrexx' => 'ACCIóN PLAN ALIMENTARIO'],// 10
            ['nombrexx' => 'SEXO'],// 11
            ['nombrexx' => 'IDENTIDADE DE GÉNERO'],// 12
            ['nombrexx' => 'ORIENTACIóN SEXUAL'],// 13
            ['nombrexx' => 'PIEZA DENTAL'],// 14
            ['nombrexx' => 'SUPERFICIE DENTAL'],// 15
            ['nombrexx' => 'DIAGNOSTICO DENTAL'],// 16
            ['nombrexx' => 'GRUPO SANGUíNEO'],// 17
            ['nombrexx' => 'RH'],// 18
            ['nombrexx' => 'ESTADO CIVIL'],// 19
            ['nombrexx' => 'GRUPO ÉTNICO'],// 20
            ['nombrexx' => 'ESTADO AFILIACIóN'],// 21
            ['nombrexx' => 'ENTIDAD PROMOTORA DE SALUD'],// 22
            ['nombrexx' => 'SI/NO'],// 23
            ['nombrexx' => 'TIPO DISCAPACIDAD'],// 24
            ['nombrexx' => 'CONDICIONAL NO APLICA'],// 25
            ['nombrexx' => 'APLICACIóN SISBEN'],// 26
            ['nombrexx' => 'MéTODO ANTICONCEPTIVO'],// 27
            ['nombrexx' => 'NúMERO COMIDAS'],// 28
            ['nombrexx' => 'MOTIVO COMIDAS DIARIAS'],// 29
            ['nombrexx' => 'TIPO PROCESO'],// 30
            ['nombrexx' => 'POR QUé'],// 31
            ['nombrexx' => 'RADIO BUTTON SINO'],// 32
            ['nombrexx' => 'CLASE LIBRETA'],// 33
            ['nombrexx' => 'RESIDENCIA RHC'],// 34
            ['nombrexx' => 'LA RESIDENCIA ES'],// 35
            ['nombrexx' => 'TIPO DIRECCIóN'],// 36
            ['nombrexx' => 'ZONA DONDE VIVE'],// 37
            ['nombrexx' => 'CUADRANTE'],// 38
            ['nombrexx' => 'ALFABETO'],// 39
            ['nombrexx' => 'BIS'],// 40
            ['nombrexx' => 'ESTRATO SOCIOECONóMICO'],// 41
            ['nombrexx' => 'CONDICIONES DEL AMBIENTE'],// 42
            ['nombrexx' => 'EVENTOS MéDICOS'],// 43
            ['nombrexx' => 'TIPO TELéFONO'],// 44
            ['nombrexx' => 'MOTIVO PARD'],// 45
            ['nombrexx' => 'MOTIVO VINCULACION SRPA'],// 46
            ['nombrexx' => 'MEDIDA PEDAGOGICA SRPA'],// 47
            ['nombrexx' => 'MOTIVO DE LA VINCULACIóN AL SRPA'],// 48
            ['nombrexx' => 'SANCIONES SPOA'],// 49
            ['nombrexx' => 'CAUSAS VINCUALCIÓN DELINCUENCIA'],// 50
            ['nombrexx' => 'LUGAR PARD'],// 51
            ['nombrexx' => 'NIVEL DE AVANCE'],// 52
            ['nombrexx' => 'SUSTANCIA PSICOACTIVA'],// 53
            ['nombrexx' => 'FRECUENCIA USO SUSTANCIA'],// 54
            ['nombrexx' => 'VIA ADMINISTRACION'],// 55
            ['nombrexx' => 'PLANO AFECTACION'],// 56
            ['nombrexx' => 'CONDICIONES ESPECIALES'],// 57
            ['nombrexx' => 'RIESGO ESCNNA'],// 58
            ['nombrexx' => 'BENEFICIOS'],// 59
            ['nombrexx' => 'SITUACIÓN MILITAR'],// 60
            ['nombrexx' => 'POBLACIÓN INDÍGENA'],// 61
            ['nombrexx' => 'TIPO VIA PRINCIPAL'],// 62
            ['nombrexx' => 'MOTIVO VINCULACION IDIPRON'],// 63
            ['nombrexx' => 'REPRESENTACION LEGAL'],// 64
            ['nombrexx' => 'MODALIDAD'],// 65
            ['nombrexx' => 'CONVENCION B, PARENTESCO O PERSONA'],// 66
            ['nombrexx' => 'CSD - RÉGIMEN ESPECIAL EN SALUD'],// 67
            ['nombrexx' => 'CSD - RÉGIMEN VINCULADO'],// 68
            ['nombrexx' => 'ÊLTIMO GRADO CSD'],// 69
            ['nombrexx' => 'PRESENTA DIFICULTADES PARA ACCEDER A ALGUNA RED DE APOYO? VI'],// 70
            ['nombrexx' => 'MOTIVOS DE RESTRICCIóN DE ACCESO A ESPACIOS, SERVICIO O REDES DE APOYO VI'],// 71
            ['nombrexx' => 'MOTIVOS POR EL CUAL SE PRESENTA LA RESTRICCIóN'],// 72
            ['nombrexx' => 'CONVENCIÓN A'],// 73
            ['nombrexx' => 'QUÉ PERSONA(S) PARECEN PRODUCIR O EMPEORAR ESTAS DIFICULTADES'],// 74
            ['nombrexx' => 'TIEMPO AL DIA'],// 75
            ['nombrexx' => 'DIAS SEMANA CANTIDAD'],// 76
            ['nombrexx' => 'ACTIVIDADES REALIZADAS'],// 77
            ['nombrexx' => 'RELIGION QUE PROFESA'],// 78
            ['nombrexx' => 'SACRAMENTOS REALIZADOS'],// 79
            ['nombrexx' => 'PROCESOS'],// 80
            ['nombrexx' => 'TALLA PANTALON'],// 81
            ['nombrexx' => 'TALLA CAMISA'],// 82
            ['nombrexx' => 'TALLA ZAPATOS'],// 83
            ['nombrexx' => 'AÑO PRESTACION SERVICIO'],// 84
            ['nombrexx' => 'TEMA PARAMETRO CORREGIR'],// 85
            ['nombrexx' => 'TEMAS INDICADORES'],// 86
            ['nombrexx' => 'ANTECEDENTES SALUD VSI'],// 87
            ['nombrexx' => 'TIPO DE RED'],// 88
            ['nombrexx' => 'SITUACION VULNERACION RIESGO'],// 89
            ['nombrexx' => 'MATERIAL PISOS'],// 90
            ['nombrexx' => 'MATERIAL MUROS'],// 91
            ['nombrexx' => 'CONDICIONES AMBIENTALES CSD'],// 92
            ['nombrexx' => 'ESTADO CONDICIONES AMBIENTALES'],// 93
            ['nombrexx' => 'SERVICIOS PUBLICOS'],// 94
            ['nombrexx' => 'LEGALIDAD'],// 95
            ['nombrexx' => 'ESPACIOS HOGAR'],// 96
            ['nombrexx' => 'ANTECEDENTES PROBLEMAS SOCIALES'],// 97
            ['nombrexx' => 'TIPOLOGIA FAMILIAR'],// 98
            ['nombrexx' => 'TIPOLOGIA DE HOGAR'],// 99
            ['nombrexx' => 'RAZON TRASLADO'],// 100
            ['nombrexx' => 'MOTIVO VINCULACION'],// 101
            ['nombrexx' => 'PROBLEMATICA FAMILAR'],// 102
            ['nombrexx' => 'FORMA ESTABLECER REGLAS HOGAR'],// 103
            ['nombrexx' => 'FORMA ACTUAR NORMAS'],// 104
            ['nombrexx' => 'SOLUCION PROBLEMAS CASA'],// 105
            ['nombrexx' => 'ACUDE PROBLEMAS CASA'],// 106
            ['nombrexx' => 'MODO ACTUAR INCUMPLIMIENTO REGLAS'],// 107
            ['nombrexx' => 'MIEMBROS FAMILA DESTACAN'],// 108
            ['nombrexx' => 'ACTUA FAMILIA SUCESOS POSITIVOS'],// 109
            ['nombrexx' => 'PERIODICIDAD'],// 110
            ['nombrexx' => 'DONDE COMPRA ALIMENTOS'],// 111
            ['nombrexx' => 'ALIMENTACION DIARIA'],// 112
            ['nombrexx' => 'ENTIDAD RECIBE ALIMENTACION'],// 113
            ['nombrexx' => 'ACTIVIDAD GENERA INGRESO'],// 114
            ['nombrexx' => 'TRABAJO INFORMAL'],// 115
            ['nombrexx' => 'OTRAS ACTIVIDADES'],// 116
            ['nombrexx' => 'TIPO RELACION LABORAL'],// 117
            ['nombrexx' => 'MOTIVO RETIRO'],// 118
            ['nombrexx' => 'TIPO POBLACION FI'],// 119
            ['nombrexx' => 'CAUSAS VINCULACION DELINCUENCIA'],// 120
            ['nombrexx' => 'TIPO RESIDENCIA DUERME'],// 121
            ['nombrexx' => 'NINGUNA FUENTE INGRESO'],// 122
            ['nombrexx' => 'JORNADA INGRESOS'],// 123
            ['nombrexx' => 'DIAS SEMANA NOMBRE'],// 124
            ['nombrexx' => 'FRECUENCIA INGRESOS'],// 125
            ['nombrexx' => 'VICTIMA ESCNNA'],// 126
            ['nombrexx' => 'INICIO HABITANCIA CALLE'],// 127
            ['nombrexx' => 'CONTINUACION HABITANCIA CALLE'],// 128
            ['nombrexx' => 'DIAS DE SEMANA'],// 129
            ['nombrexx' => 'NATURALEZA COL'],// 130
            ['nombrexx' => 'CONVENCIÓN D'],// 131
            ['nombrexx' => 'TALLA PANTALON CAMISO NIÑO NIÑA'],// 132
            ['nombrexx' => 'TALLA CAM NIÑO'],// 133
            ['nombrexx' => 'TALLA PAL HOM ADULT'],// 134
            ['nombrexx' => 'TALLA PAL MUJ ADULT'],// 135
            ['nombrexx' => 'TALLA CAM HOM ADULT'],// 136
            ['nombrexx' => 'TALLA CAM MUJ ADULT'],// 137
            ['nombrexx' => 'TALLA ZAPATO'],// 138
            ['nombrexx' => 'SEXO Y ETARIO'],// 139
            ['nombrexx' => 'HORAS LABORALES'],// 140
            ['nombrexx' => 'TAMA1'],// 141
            ['nombrexx' => 'ÁMBITO VIOLENCIA'],// 142
            ['nombrexx' => 'TIPO VIOLENCIA'],// 143
            ['nombrexx' => 'SERVICIOS DOMÉSTICOS'],// 144
            ['nombrexx' => 'RESIDENCIA CHC'],// 145
            ['nombrexx' => 'MANERA CONTACTO IDIPRON'],// 146
            ['nombrexx' => 'INGRESOS POR OPCIÓN'],// 147
            ['nombrexx' => 'PROBAR'],// 148
            ['nombrexx' => 'MOTIVO INGRESO PROTECCION'],// 149
            ['nombrexx' => 'DOCUMENTO NNA'],// 150
            ['nombrexx' => 'JORNADA ESTUDIO'],// 151
            ['nombrexx' => 'TIEMPO EXTENSO'],// 152
            ['nombrexx' => 'NIVEL ESTUDIO'],// 153
            ['nombrexx' => 'GRADO APROBADO'],// 154
            ['nombrexx' => 'DOCUMENTOS ANEXOS INGRESO'],// 155
            ['nombrexx' => 'OCUPACIÓN'],// 156
            ['nombrexx' => 'REPETIDOS'],// 157
            ['nombrexx' => 'QUÉ EMOCIONES LE GENERAN ESTAS DIFICULTADES? (CONVENCIÓN E) VI'],// 158
            ['nombrexx' => 'TIPO PERSONA VINCULACION'],// 159
            ['nombrexx' => 'EN QUÉ CONTEXTOS SE LE FACILITA INTERACTUAR CON OTRAS PERSONAS? VI'],// 160
            ['nombrexx' => 'JEFATURA HOGAR'],// 161
            ['nombrexx' => 'ÁREA EMOCIONAL VSI'],// 162
            ['nombrexx' => 'ÁREA SEXUAL VSI'],// 163
            ['nombrexx' => 'ÁREA COMPORTAMENTAL VSI'],// 164
            ['nombrexx' => 'ÁREA ACADÉMICA VSI'],// 165
            ['nombrexx' => 'ÁREA SOCIAL VSI'],// 166
            ['nombrexx' => 'ÁREA FAMILIAR'],// 167
            ['nombrexx' => 'EN QUÉ CONTEXTOS SE LE DIFICULTA INTERACTUAR CON OTRAS PERSONAS? VI'],// 168
            ['nombrexx' => 'CUÁL ES LA DIFICULTAD PARA LOGRAR LA INTERACCIÓN? VI'],// 169
            ['nombrexx' => 'CÓMO SE SIENTE LA MAYOR PARTE DEL TIEMPO? VI'],// 170
            ['nombrexx' => 'EN QUÉ CONTEXTO PREDOMINAN ESTOS ESTADOS DE ANIMO? VI'],// 171
            ['nombrexx' => 'INDIQUE CUÁL ES LA PERSONA MÁS REPRESENTATIVA DE SU FAMILIA? (CONVENCIÓN B) VI'],// 172
            ['nombrexx' => 'CUÁL ES LA PERSONA CON QUIEN NO TIENE BUENAS RELACIONES EN SU FAMILIA? (CONVENCIÓN B) VI'],// 173
            ['nombrexx' => 'MENCIONE EL/LOS MOTIVOS POR LO CUAL NO EXISTEN BUENAS RELACIONES VI'],// 174
            ['nombrexx' => 'CÓMO ES LA RELACIÓN CON SU FAMILIA? VI'],// 175
            ['nombrexx' => 'QUÉ TIPO DE DIFICULTADES PRESENTA CON SU PAREJA? VI'],// 176
            ['nombrexx' => 'CÓMO AFRONTAN LAS DIFICULTADES? VI'],// 177
            ['nombrexx' => 'ENTIDAD EN LA QUE SE DENUNCIA EL DELITO? VI'],// 178
            ['nombrexx' => 'PREGUNTAS VALIDADORAS DE LOS INDICADORES'],// 179
            ['nombrexx' => 'MOTIVO PRESENTA SPA'],// 180
            ['nombrexx' => 'EXPECTATIVA CONSUMO SPA'],// 181
            ['nombrexx' => 'CODIFICACIÓN TALLA / EDAD'],// 182
            ['nombrexx' => 'ENFERMEDADES'],// 183
            ['nombrexx' => 'ACTIVIDAD FÍSICA'],// 184
            ['nombrexx' => 'APETITO'],// 185
            ['nombrexx' => 'ALIMENTOS ANTES DE INGRESAR AL IDIPRON'],// 186
            ['nombrexx' => 'FRECUENCIA DE CONSUMO DE ALIMENTOS ANTES DE INGRESAR AL IDIPRON'],// 187
            ['nombrexx' => 'ACCIONES A AUMENTAR'],// 188
            ['nombrexx' => 'ACCIONES A DISMINUIR'],// 189
            ['nombrexx' => 'ACCIONES PLAN ALIMENTARIO'],// 190
            ['nombrexx' => 'CODIFICACIÓN IMC / EDAD'],// 191
            ['nombrexx' => 'TIPO DE DEPENDENCIA'],// 192
            ['nombrexx' => 'TIPO DE MATRÍCULA'],// 193
            ['nombrexx' => 'CÓMO REACCIONA ANTE EVENTOS O SITUACIONES QUE LE GENEREN UN CAMBIO EMOCIONAL SIGNIFICATIVO'],// 194
            ['nombrexx' => 'SENTIMIENTOS Y EMOCIONES VI'],// 195
            ['nombrexx' => 'NIVELES LÍNEA BASE'],// 196
            ['nombrexx' => 'HA OCURRIDO EN SU VIDA ALGÊN ACONTECIMIENTO ESTRESANTE O TRAUMÁTICO'],// 197
            ['nombrexx' => 'NIVEL DE RIESGO VI'],// 198
            ['nombrexx' => 'INDIQUE LOS MOTIVOS O SITUACIONES POR EL CUAL SE HA TENIDO PENSAMIENTOS, AMENAZAS E INTENTOS'],// 199
            ['nombrexx' => 'QUÉ TIPO DE CONDUCTAS AUTO LESIVAS? VI'],// 200
            ['nombrexx' => 'QUÉ ACTIVACIONES FISIOLÓGICAS LE GENERA? VI'],// 201
            ['nombrexx' => 'MOMENTO EVENTO'],// 202
            ['nombrexx' => 'TIPO EVENTO SEXUAL NEGATIVO'],// 203
            ['nombrexx' => 'ESTADO PROCESO TERAPÉUTICO'],// 204
            ['nombrexx' => 'MOTIVO POR EL CUAL NO ESTÁ ESCOLARIZADO'],// 205
            ['nombrexx' => 'RENDIMIENTO ACADÉMICO'],// 206
            ['nombrexx' => 'CAUSA DE DESERCIÓN'],// 207
            ['nombrexx' => 'MATERIAS'],// 208
            ['nombrexx' => 'TIPO DE DIFICULTAD'],// 209
            ['nombrexx' => 'IDENTIFICA ALGÊN TIPO DE DIFICULTAD'],// 210
            ['nombrexx' => 'AREA'],// 211
            ['nombrexx' => 'ÁREAS AJUSTE'],// 212
            ['nombrexx' => 'TIPO ATENCIÓN INTERVENCIÓN PSICOLOGO'],// 213
            ['nombrexx' => 'ESTADO AUDICION'],// 214
            ['nombrexx' => 'ESTADO HABLA EXPLORACION FUNCIONAL'],// 215
            ['nombrexx' => 'IMPRESION DIAGNOSTICA VALORACIÓN INICIAL FONOAUDIOLOGÍA'],// 216
            ['nombrexx' => 'TIPO SEGUIMIENTO FONOAUDIOLOGÍA'],// 217
            ['nombrexx' => 'TIPO EVOLUCIÓN FONOAUDIOLOGÍA'],// 218
            ['nombrexx' => 'IMPRESION DIAGNOSTICA VALORACIÓN TAMIZ AUDITIVO'],// 219
            ['nombrexx' => 'REMISIÓN VALORACIÓN INICIAL FONOAUDIOLOGÍA'],// 220
            ['nombrexx' => 'REMISIÓN VALORACIÓN TAMIZ AUDITIVO'],// 221
            ['nombrexx' => 'MOTIVO ATENCIÓN VALORACIÓN MÉDICA'],// 222
            ['nombrexx' => 'PERIODICIDAD PARA VALORACIÓN MÉDICA'],// 223
            ['nombrexx' => 'DIAGNÓSTICO DE EVOLUCIÓN'],// 224
            ['nombrexx' => 'CONDUCTA PARA VALORACIÓN MÉDICA'],// 225
            ['nombrexx' => 'TRAMITE ENTREGA DOCUMENTO'],// 226
            ['nombrexx' => 'INSTRUMENTOS NUTRICIÓN'],// 227
            ['nombrexx' => 'INSTRUMENTOS FONOAUDIOLOGÍA'],// 228
            ['nombrexx' => 'INSTRUMENTOS AUXILIAR DE ENFERMERÍA'],// 229
            ['nombrexx' => 'TIPO DE ACCIDENTE'],// 230
            ['nombrexx' => 'CAUSA DE ACCIDENTE'],// 231
            ['nombrexx' => 'LUGAR DONDE OCURRIO ACCIDENTE'],// 232
            ['nombrexx' => 'AGENTE DEL ACCIDENTE'],// 233
            ['nombrexx' => 'PARTE DEL CUERPO AFECTADO'],// 234
            ['nombrexx' => 'SÍNTOMA PEDICULOSIS'],// 235
            ['nombrexx' => 'USO DEL CABELLO'],// 236
            ['nombrexx' => 'TIEMPO SUFRE PEDICULOSIS'],// 237
            ['nombrexx' => 'TRATAMIENTO PEDICULOSIS'],// 238
            ['nombrexx' => 'CONSECUENCIA PEDICULOSIS CABEZA'],// 239
            ['nombrexx' => 'CONSECUENCIA PEDICULOSIS CUELLO'],// 240
            ['nombrexx' => 'CONSECUENCIA PEDICULOSIS TÓRAX'],// 241
            ['nombrexx' => 'CONSECUENCIA PEDICULOSIS BRAZOS Y AXILAS'],// 242
            ['nombrexx' => 'CONSECUENCIA PEDICULOSIS PIEL DE TÓRAX'],// 243
            ['nombrexx' => 'TIPO DE ACCESO AL SISTEMA'],// 244
            ['nombrexx' => 'MOTIVO ATENCIÓN MITIGACIÓN'],// 245
            ['nombrexx' => 'DIAGNÓSTICO EVOLUCIÓN MITIGACIÓN'],// 246
            ['nombrexx' => 'CONDUCTA MITIGACIÓN'],// 247
            ['nombrexx' => 'TRATAMIENTO DENTAL'],// 248
            ['nombrexx' => 'CALIFICACIÓN AUTOCUIDADO'],// 249
            ['nombrexx' => 'CALIFICACIÓN COMUNICACIÓN'],// 250
            ['nombrexx' => 'CALIFICACIÓN HABILIDADES'],// 251
            ['nombrexx' => 'CALIFICACIÓN SENSOPERCEPTUAL'],// 252
            ['nombrexx' => 'CALIFICACIÓN NEUROSENSORIAL'],// 253
            ['nombrexx' => 'PLAN DE MANEJO'],// 254
            ['nombrexx' => 'REMISIÓN DESDE TERAPIA'],// 255
            ['nombrexx' => 'COMPONENTE NEUROSENSORIAL'],// 256
            ['nombrexx' => 'IMPRESIÓN DIAGNÓSTICA'],// 257
            ['nombrexx' => 'TEMA A TRABAJAR SEGUIMIENTO TERAPIA'],// 258
            ['nombrexx' => 'RESULTADO DE LA INTERVENCIÓN'],// 259
            ['nombrexx' => 'NIVEL PERFIL OCUPACIONAL'],// 260
            ['nombrexx' => 'MOTIVO DE LA ATENCIÓN'],// 261
            ['nombrexx' => 'TIPO DE ACOMPAÑAMIENTO'],// 262
            ['nombrexx' => 'TIPO DE APOYO DIAGNÓSTICO'],// 263
            ['nombrexx' => 'TIPO DE ESPECIALIDAD MÉDICA'],// 264
            ['nombrexx' => 'CALIDAD DEL AFILIADO'],// 265
            ['nombrexx' => 'TIPO DE PROCEDIMIENTO'],// 266
            ['nombrexx' => 'TIPO DE PYP'],// 267
            ['nombrexx' => 'TIPO DE BRIGADA'],// 268
            ['nombrexx' => 'TIPO DE CHARLA'],// 269
            ['nombrexx' => 'TIPO DE TAMIZAJE'],// 270
            ['nombrexx' => 'VACUNA'],// 271
            ['nombrexx' => 'RAZONES SALIDA UPI'],// 272
            ['nombrexx' => 'CONTEXTURA'],// 273
            ['nombrexx' => 'TIPO DE ROSTRO'],// 274
            ['nombrexx' => 'COLOR DE PIEL'],// 275
            ['nombrexx' => 'COLOR DE CABELLO'],// 276
            ['nombrexx' => 'TIPO DE CABELLO'],// 277
            ['nombrexx' => 'CORTE DE CABELLO'],// 278
            ['nombrexx' => 'COLOR DE OJOS'],// 279
            ['nombrexx' => 'NARIZ'],// 280
            ['nombrexx' => 'TAMAÑO DEL LUNAR'],// 281
            ['nombrexx' => 'TIPO DE CONVENIO'],// 282
            ['nombrexx' => 'TIPO RECURSO'],// 283
            ['nombrexx' => 'TIPO DEPENDENCIA'],// 284
            ['nombrexx' => 'DIRIGIDO A:'],// 285
            ['nombrexx' => 'CUENTA DOCUMENTO'],// 286
            ['nombrexx' => 'VINCULADO'],// 287
            ['nombrexx' => 'UNIDAD DE MEDIDA'],// 288
            ['nombrexx' => 'ESTADO TABLAS'],// 289
            ['nombrexx' => 'TIPO DE VESTIMENTA'],// 290
            ['nombrexx' => 'ESPACIO DONDE PARCHA'],// 291
            ['nombrexx' => 'MOTIVOS DE AUSENCIA'],// 292
            ['nombrexx' => 'ACONTECIMIENTOS GENERADORES DE AFECTACIONES EMOCIONALES'],// 293
            ['nombrexx' => 'POSICIÓN OCUPACIONAL'],// 294
            ['nombrexx' => 'CATEGORIA INDICADORES'],// 295
            ['nombrexx' => 'ACTIVIDAD GENERA INGRESO CHC'],// 296
            ['nombrexx' => 'RESPUESTA VALIDACIONES INDICADORES'],// 297
            ['nombrexx' => 'ACCIONES VIOLENCIA VI'],// 298
            ['nombrexx' => 'TIPO DE RED VI'],// 299
            ['nombrexx' => 'MOTIVOS QUE HA TENIDO PARA QUITARSE LA VIDA (VI)'],// 300
            ['nombrexx' => 'PROBLEMAS DE SALUD'],// 301
            ['nombrexx' => 'TIPO DE DILIGENCIAMIENTO'],// 302
            ['nombrexx' => 'ESTADO DE INGRESO'],// 303
            ['nombrexx' => 'PRENDAS DE VESTIR'],// 304
            ['nombrexx' => 'MATERIAL DE LAS PRENDAS'],// 305
            ['nombrexx' => 'LÍNEAS DE ATENCIÓN'],// 306
            ['nombrexx' => 'OBJETIVOS DE SALIDA AI'],// 307
            ['nombrexx' => 'ESTADO A LA SALIDA AI'],// 308
            ['nombrexx' => 'ESTADO DEL REGISTRO'],// 309
            ['nombrexx' => 'TIPO DE VINCULACION'],// 310
            ['nombrexx' => 'CICLO VITAL'],// 311
            ['nombrexx' => 'VSPA - TIPO DE VALORACIÓN'],// 312
            ['nombrexx' => 'VSPA - CONDICIÓN ESCOLAR'],// 313
            ['nombrexx' => 'VSPA - FUENTE DE INGRESOS'],// 314
            ['nombrexx' => 'VSPA - MODALIDAD DE ATENCIÓN'],// 315
            ['nombrexx' => 'VSPA - CÓMO ACUDUDIÓ A LA INSTITUCIÓN'],// 316
            ['nombrexx' => 'VSPA - SITIO HABITUAL DE CONSUMO'],// 317
            ['nombrexx' => 'VSPA - FRECUENCIA DE USO'],// 318
            ['nombrexx' => 'VSPA - IMPACTO NEGATIVO'],// 319
            ['nombrexx' => 'VSPA - TIPO DE DROGA'],// 320
            ['nombrexx' => 'VSPA - CANTIDAD DE CIGARRILLOS'],// 321
            ['nombrexx' => 'VSPA - COMO OBTIENE LA SUSTANCIA'],// 322
            ['nombrexx' => 'VSPA - UNIDAD DE MEDIDA'],// 323
            ['nombrexx' => 'VSPA - ACOSTUMBRA A UTILIZAR LA SUSTANCIA'],// 324
            ['nombrexx' => 'VSPA - ACOSTUMBRA A COMPARTIR AGUJAS'],// 325
            ['nombrexx' => 'RIESGO O VICTIMA ESCNNA'],// 326
            ['nombrexx' => '¿CUáLES FUERON LAS RAZONES PARA HABER INICIADO LA HABITANZA EN CALLE?'],// 327
            ['nombrexx' => '¿RAZONES POR LAS CUALES CONTINUA LA HABITANZA EN CALLE?'],// 328
            ['nombrexx' => 'VMA - TIPO DE TRASTORNO'],// 329
            ['nombrexx' => 'VMA - TIPO DE APETITO'],// 330
            ['nombrexx' => 'VMA - SUDORACIÓN'],// 331
            ['nombrexx' => 'VMA - ESTADO DE ÁNIMO'],// 332
            ['nombrexx' => 'VMA - TRATAMIENTO'],// 333
            ['nombrexx' => 'VMA - CONDUCTA'],// 334
            ['nombrexx' => 'VMA - TIPO DE DIAGNÓSTICO'],// 335
            ['nombrexx' => 'LUGARES/ESPACIOS EXTERNOS'],// 336
            ['nombrexx' => 'TIPO LETRA TITULOS'],// 337
            ['nombrexx' => 'RESPONSABLE DE LA ACTIVIDAD'],// 338
            ['nombrexx' => 'SEXO DEPENDENCIAS'],// 339
            ['nombrexx' => 'FORMULARIO MOTIVO DE ESTADO PARA EL REGISTRO'],// 340
            ['nombrexx' => 'LA DISCAPACIDAD FUE PRODUCIDA POR LA COMISION DE ALGUN ACTO ILEGAL'],// 341
            ['nombrexx' => 'HA SIDO VICTIMA DE ATAQUES CON'],// 342
            ['nombrexx' => '¿QUE ACTIVIDADES REALIZA EN SU TIEMPO LIBRE?'],// 343
            ['nombrexx' => '¿POR LAS ACCIONES EN LAS CUALES PRESUNTAMENTE ESTA EN CONFLICTO CON LA LEY HA ACTUADO EN?'],// 344
            ['nombrexx' => '12.1 ¿PRESENTA ALGúN TIPO DE VIOLENCIA?'],// 345
            ['nombrexx' => '12.1 A HA EJERCIDO ALGúN TIPO DE PRESUNTA VIOLENCIA DURANTE LA ACTIVIDAD EN CONFLICTO CON LA LEY?'],// 346
            ['nombrexx' => 'COMBO VIOLENCIA PARA: (VIOLENCIAS Y CONDICION ESPECIAL)'],// 347
            ['nombrexx' => 'COMBO CONTEXTOS PARA: (VIOLENCIAS Y CONDICION ESPECIAL)'],// 348
            ['nombrexx' => '12.2 EL TIPO DE VIOLENCIA REFERENCIADO CORRESPONDE A VIOLENCIA BASADA EN'],// 349
            ['nombrexx' => '12.1.B QUE TIPO DE PRESUNTAS LESIONES HA COMETIDO DURANTE LA ACTIVIDAD?'],// 350
            ['nombrexx' => 'CONDICIONES ESPECIALES CR'],// 351
            ['nombrexx' => '¿ES CABEZA DE FAMILIA? CR'],// 352
            ['nombrexx' => '¿ES USTED JOVEN EN PRESUNTO CONFLICTO CON LA LEY?'],// 353
            ['nombrexx' => 'ESTRATEGIA'],// 354
            ['nombrexx' => 'SIN ESTRATEGIA'],// 355
            ['nombrexx' => 'TIPO ATENCIÓN INTERVENCIÓN TRABAJADOR SOCIAL'],// 356
            ['nombrexx' => 'MOTIVO VINCULACION SPOA'],// 357
            ['nombrexx' => 'PARENTESCO FI'],// 358
            ['nombrexx' => 'TIPO POBLACION CSD'],// 359
            ['nombrexx' => 'PROBLEMA CSD'],// 360
            ['nombrexx' => 'TIPO DE DOCUMENTO CSD'],// 361
            ['nombrexx' => 'MOTIVO VINCULACION JUSTICIA'],// 362
            ['nombrexx' => 'AUTORIZACIóN DE RESPUESTA'],// 363
            ['nombrexx' => 'DOCUMENTOS TALLERES'],// 364
            ['nombrexx' => 'TIPO ATENCIÓN INTERVENCIÓN PSICOLOGO CLINICO'],// 365
            ['nombrexx' => '¿Tiene definida su situación militar?'],
            ['nombrexx' => 'Tintura'],
            ['nombrexx' => 'Laceraciones y hematomas'],
            ['nombrexx' => 'Condiciones Físicas Óptimas x'],
            ['nombrexx' => 'condicio'],
            ['nombrexx' => 'famfisic'],
            ['nombrexx' => 'fampsico'],
            ['nombrexx' => 'famsexua'],
            ['nombrexx' => 'famecono'],
            ['nombrexx' => 'amifisic'],
            ['nombrexx' => 'amipsico'],
            ['nombrexx' => 'amisexua'],
            ['nombrexx' => 'amiecono'],
            ['nombrexx' => 'parfisic'],
            ['nombrexx' => 'parpsico'],
            ['nombrexx' => 'parsexua'],
            ['nombrexx' => 'parecono'],
            ['nombrexx' => 'comfisic'],
            ['nombrexx' => 'compsico'],
            ['nombrexx' => 'comsexua'],
            ['nombrexx' => 'comecono'],
            ['nombrexx' => 'certific'],
            ['nombrexx' => 'independ'],
            ['nombrexx' => 'condicio x'],
            ['nombrexx' => 'cuendocu'],
            ['nombrexx' => 'tiecerti'],
            ['nombrexx' => 'tienebis'],
            ['nombrexx' => '¿Ha establecido un horario para el consumo de alimentos?'],
            ['nombrexx' => '¿Recibe algún tipo de apoyo alimentario?'],
            ['nombrexx' => 'neciayud'],
            ['nombrexx' => 'Cuenta con el documento físico?'],
            ['nombrexx' => '¿Tiene definida su situación militar?x'],
            ['nombrexx' => 'condicio xx'],
            ['nombrexx' => '¿Convive con el NNAJ?'],
            ['nombrexx' => 'convivex'],
            ['nombrexx' => 'reprlega'],
            ['nombrexx' => 'condicix'],
            ['nombrexx' => '¿Usted y su familia siempre han vivido en Bogotá?'],
            ['nombrexx' => 'Convivieron'],
            ['nombrexx' => 'condiciox'],
            ['nombrexx' => 'Convivieron x'],
            ['nombrexx' => 'condicio xxx'],
            ['nombrexx' => 'sinoxxxx'],
            ['nombrexx' => '¿Considera que la familia presenta dificultades económicas?'],
            ['nombrexx' => '¿Se encuentra vinculado a la delincuencia o a la violencia?'],
            ['nombrexx' => '¿Comparte?'],
            ['nombrexx' => 'BIS'],
            ['nombrexx' => 'dircondi'],
            ['nombrexx' => '¿Es Legal?'],
            ['nombrexx' => '¿Cuenta con certificado?'],
            ['nombrexx' => '¿Pertecene a algún grupo, parche u organización?'],
            ['nombrexx' => 'menor'],
            ['nombrexx' => '¿Quieres entrar al IDIPRON?'],
            ['nombrexx' => '¿Convive con el NNAJ?'],
            ['nombrexx' => '¿Es el representante legal?'],
            ['nombrexx' => '¿Consume SPA?'],
            ['nombrexx' => '¿Actualmente estudia?'],
            ['nombrexx' => '¿Sabe leer?'],
            ['nombrexx' => 'Vigente'],
            ['nombrexx' => '¿Ha estado privado de la libertad?'],
            ['nombrexx' => '¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA?'],
            ['nombrexx' => '¿Ha estado en Proceso Administrativo de Restablecimiento de Derechos - PARD?'],
            ['nombrexx' => '¿Se encuentra vigente?'],
            ['nombrexx' => '¿Tiene lugar de residencia en dónde dormir?'],
            ['nombrexx' => 'Bis x'],
            ['nombrexx' => '¿Tiene algún tipo de discapacidad?'],
            ['nombrexx' => 'Ha consumido el último mes?'],
            ['nombrexx' => 'condicio xxxx'],
            ['nombrexx' => 'Respuesta'],
            ['nombrexx' => 'condicio xxxxx'],
            ['nombrexx' => '¿Cuenta con certificado? x'],
            ['nombrexx' => '¿Responsable de la unidad?'],
            ['nombrexx' => '¿En algún momento de su vida le ha ocurrido algún evento sexual negativo?'],
            ['nombrexx' => '¿Existe alguna situación, lugar, objeto, persona o actividad en particular que le genere malestar intenso caracterizado por activación fisiológica?'],
            ['nombrexx' => 'Cuenta con el documento físico? x'],
            ['nombrexx' => '¿Ha presentado consumo de sustancias Psicoactivas?'],
            ['nombrexx' => 'sinoxxxx x'],
            ['nombrexx' => 'Convivieron xx'],
            ['nombrexx' => 'Convivieron xxx'],
            ['nombrexx' => '¿Actualmente estudia? x'],
            ['nombrexx' => '¿Ha ocurrido en su vida algún acontecimiento estresante o traumático que le haya generado afectaciones emocionales?'],
            ['nombrexx' => '¿En el hogar usted realiza algún aporte mensual?'],
            ['nombrexx' => 'activida'],
            ['nombrexx' => 'Considera pertinente el Ingreso del NNA a IDIPRON'],
            ['nombrexx' => '¿Presenta alguna red de apoyo?'],
            ['nombrexx' => 'sinoxxxx xx'],
            ['nombrexx' => '¿Se siente a gusto con el tipo de relación?'],
            ['nombrexx' => '¿Ha recibido atención psicológica y/o psiquiatría?'],
            ['nombrexx' => '¿Existe reconocimiento por parte del NNA como víctima de ESCNNA?'],
            ['nombrexx' => 'SI/NO'],
            ['nombrexx' => '4.1 ¿Presenta algún tipo de violencia?'],
            ['nombrexx' => 'condicio vistasTrait'],
            ['nombrexx' => 'condicio vistasTraitx'],
            ['nombrexx' => 'Lunar'],
            ['nombrexx' => 'Se realiza llamada a línea de atención'],
            ['nombrexx' => 'Condiciones Físicas Óptimas'],
            ['nombrexx' => 'Orientado en sus tres esferas (persona, tiempo, lugar)'],
            ['nombrexx' => 'Enfermedad general'],
            ['nombrexx' => 'Brotes'],
            ['nombrexx' => 'Orientado en sus tres esferas (persona, tiempo, lugar) x'],
            ['nombrexx' => 'Enfermedad general x'],
            ['nombrexx' => 'Brotes x'],
            ['nombrexx' => 'Laceraciones y hematomas x'],
            ['nombrexx' => 'NNAJ Visitado(s) (as)'],
            ['nombrexx' => '¿Tiene algún tipo de discapacidad? x'],
            ['nombrexx' => '¿Existe(n) algun(os) integrante(s) de la familia que presente(n) problemas de peso?'],
            ['nombrexx' => '¿Sabe leer? x'],
            ['nombrexx' => '¿Sabe escribir?'],
            ['nombrexx' => '¿Sabe operaciones matemáticas básicas?'],
            ['nombrexx' => '¿Actualmente estudia? xx'],
            ['nombrexx' => '¿Al interior de la familia hay normas y límites?'],
            ['nombrexx' => '¿Los integrantes del nucleo familiar conocen estas normas y límites?'],
            ['nombrexx' => '¿Se encuentra en riesgo de participar en actos delictivos?'],
            ['nombrexx' => 'Hacinamiento'],
            ['nombrexx' => '¿Pertecene a algún grupo, parche u organización? x'],
            ['nombrexx' => '¿Tiene acceso a recreación?'],
            ['nombrexx' => '¿Tiene prácticas religiosas?'],
            ['nombrexx' => 'mayor x'],
            ['nombrexx' => '¿Estuvo vinculado(a) al IDIPRON?'],
            ['nombrexx' => '¿Sabe escribir? x'],
            ['nombrexx' => '¿Sabe operaciones básicas matemáticas?'],
            ['nombrexx' => '¿Tiene certificado del último nivel de estudio alcanzado?'],
            ['nombrexx' => '¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA?'],
            ['nombrexx' => '¿Se encuentra vinculado a la delincuencia o a la violencia? x'],
            ['nombrexx' => '¿Se encuentra en riesgo de participar en actos delictivos?'],
            ['nombrexx' => '¿Presenta algún problema de salud?'],
            ['nombrexx' => '¿Consume medicamentos de manera permanente?'],
            ['nombrexx' => '¿Tiene hijos?'],
            ['nombrexx' => '¿Tiene algún tipo de discapacidad? xx'],
            ['nombrexx' => '¿Presenta algún problema de salud? x'],
            ['nombrexx' => '¿Consume medicamentos de manera permanente? x'],
            ['nombrexx' => '¿Tiene hijos? x'],
            ['nombrexx' => '¿Cuenta con certificado? xx'],
            ['nombrexx' => '¿Actualmente convive con el presunto agresor?'],
            ['nombrexx' => '¿Hay presencia o cercanía en la vivienda del presunto agresor?'],
            ['nombrexx' => '¿Existe reconocimiento de la situación por parte de la familia?'],
            ['nombrexx' => '¿Existe apoyo de la situación por parte de la familia?'],
            ['nombrexx' => '¿Se ha presentado denuncia ante las autoridades competentes?'],
            ['nombrexx' => '¿Ha recibido apoyo terapéutico?'],
            ['nombrexx' => '¿Presenta dificultades para seguir instrucciones a la hora de realizar las tareas?'],
            ['nombrexx' => '¿Sabe Leer?'],
            ['nombrexx' => '¿Sabe Escribir?'],
            ['nombrexx' => '¿Ha tenido pensamientos relacionados con morirse?'],
            ['nombrexx' => '¿Alguna vez ha tenido pensamientos relacionados con quitarse la vida?'],
            ['nombrexx' => '¿Alguna vez ha tenido amenazas relacionados con quitarse la vida?'],
            ['nombrexx' => '¿Alguna vez ha tenido intentos relacionados con quitarse la vida?'],
            ['nombrexx' => '¿Ha presentado conductas auto lesivas?'],
            ['nombrexx' => '¿En este momento presenta dificultades para conciliar el sueño?'],
            ['nombrexx' => '¿Ha tenido variación en sus hábitos alimenticios?'],
            ['nombrexx' => '¿La red de apoyo con la que cuenta actualmente es un factor protector?'],
            ['nombrexx' => '¿Presenta dificultades para acceder a alguna red de apoyo?'],
            ['nombrexx' => '¿Existe la ruptura de redes de apoyo por exteorización de su identidad de género?'],
            ['nombrexx' => '¿Existe la ruptura de redes de apoyo por exteorización de su orientación sexual?'],
            ['nombrexx' => '¿Ha existido restricción para el acceso a espacios, servicios o redes de apoyo?'],
            ['nombrexx' => '¿Recibió servicios de alguna red de apoyo?'],
            ['nombrexx' => '¿Se presenta algún tipo de dificultad en su familia?'],
            ['nombrexx' => '¿Ha denunciado ante las autoridades competentes la violencia presentada?'],
            ['nombrexx' => '¿En algún momento de su vida le han ordenado medicamentos psiquiátricos?'],
            ['nombrexx' => '¿Dichos medicamentos han sido tomados bajo prescripción médica?'],
            ['nombrexx' => '¿Ha iniciado su vida sexual?'],
            ['nombrexx' => '¿Tiene vida sexual activa?'],
            ['nombrexx' => '¿Ha tenido embarazos?'],
            ['nombrexx' => '¿Tiene hijos? xx'],
            ['nombrexx' => '¿Ha presentado interrupción del embarazo?'],
            ];

        $this->getR($dataxxxx);

    }
}
