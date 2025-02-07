<?php

namespace App\Traits\Actaencu;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ActaencuDataTablesTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */

    public function getTablasModulo($dataxxxx)
    {
        $dataxxxx['tablasxx'] = [];
        $dataxxxx['ruarchjs'] = [
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla']
        ];
        return $dataxxxx;
    }

    public function getTablas()
    {

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVA ACTA DE ENCUENTRO',
                'titulist' => 'LISTA DE ACTAS DE ENCUENTRO',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxx', []),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PLANILLA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI/DEPENDENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA DE DILIGENCIAMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'LOCALIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPZ', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'BARRIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ACCIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        // ['td' => 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'USUARIO QUE REGISTRA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA REGISTRO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'USUARIO QUE EDITA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA DE EDICIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'planilla', 'name' => 'ae_asistencias.id as planilla'],
                    ['data' => 'dependencia', 'name' => 'sis_depens.nombre as dependencia'],
                    ['data' => 's_servicio', 'name' => 'sis_servicios.s_servicio'],
                    ['data' => 'fechdili', 'name' => 'ae_encuentros.fechdili'],
                    ['data' => 's_localidad', 'name' => 'sis_localidads.s_localidad'],
                    ['data' => 's_upz', 'name' => 'sis_upzs.s_upz'],
                    ['data' => 's_barrio', 'name' => 'sis_barrios.s_barrio'],
                    ['data' => 'accion', 'name' => 'accion.nombre as accion'],
                    ['data' => 'actividad', 'name' => 'actividad.nombre as actividad'],
                    ['data' => 'user_contdili', 'name' => 'user_contdili.name as user_contdili'],
                    // ['data' => 'user_funcontr', 'name' => 'user_funcontr.name as user_funcontr'],

                    ['data' => 'registra', 'name' => 'registra.name as registra'],
                    ['data' => 'created_at', 'name' => 'ae_encuentros.created_at'],
                    ['data' => 'edita', 'name' => 'edita.name as edita'],
                    ['data' => 'updated_at', 'name' => 'ae_encuentros.updated_at'],

                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
    }

    public function getTablasContactos($dataxxxx)
    {
        $padrexxx = 0;
        if ($dataxxxx['modeloxx'] != '') {
            $padrexxx = $dataxxxx['modeloxx']->id;
        }
        $vercrear = false;
        $botonapi = 'botonesapi';
        if (isset($dataxxxx['vercrear'])) {
            $vercrear = $dataxxxx['vercrear'];
        }

        if (isset($dataxxxx['botonapi'])) {
            $botonapi = $dataxxxx['botonapi'];
        }
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO CONTACTO',
            'titulist' => 'CONTACTO INTRAINSTITUCIONAL E INTERINSTITUCIONAL',
            'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
            'vercrear' => $vercrear,
            'dataxxxx' => [
                ['campoxxx' => 'botonapi', 'dataxxxx' => $botonapi]
            ],
            'urlxxxxx' => route('aecontac.listaxxx', [$padrexxx]),
            'permtabl' => [
                $this->opciones['permisox'] . '-leerxxxx',
                $this->opciones['permisox'] . '-crearxxx',
                $this->opciones['permisox'] . '-editarxx',
                $this->opciones['permisox'] . '-borrarxx',
                $this->opciones['permisox'] . '-activarx',
            ],
            'cabecera' => [
                [
                    ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'NOMBRES Y APELLIDOS', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ENTIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'CARGO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'TELEFONO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'EMAIL', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'ae_contactos.id'],
                ['data' => 'nombres_apellidos', 'name' => 'ae_contactos.nombres_apellidos'],
                ['data' => 'nombre', 'name' => 'sis_entidads.nombre'],
                ['data' => 'cargo', 'name' => 'ae_contactos.cargo'],
                ['data' => 'phone', 'name' => 'ae_contactos.phone'],
                ['data' => 'email', 'name' => 'ae_contactos.email'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'tablaxxx' => 'datatable',
            'permisox' => 'aecontac',
            'permnuev' => 'crearxxx',
            'parametr' => [$padrexxx],

        ];
        $this->opciones['tablasxx'][] = [

            'titunuev' => 'NUEVO RECURSO',
            'titulist' => 'RECURSOS',
            'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
            'vercrear' => $vercrear,
            'dataxxxx' => [
                ['campoxxx' => 'botonapi', 'dataxxxx' => $botonapi]
            ],
            'urlxxxxx' => route('aerecurs.listaxxx', [$padrexxx]),
            'permtabl' => [
                $this->opciones['permisox'] . '-leerxxxx',
                $this->opciones['permisox'] . '-crearxxx',
                $this->opciones['permisox'] . '-editarxx',
                $this->opciones['permisox'] . '-borrarxx',
                $this->opciones['permisox'] . '-activarx',
            ],
            'cabecera' => [
                [
                    ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ITEM', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'RECURSO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'CANTIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'UNIDAD DE MEDIDA ', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'ae_recursos.id'],
                ['data' => 'trecurso', 'name' => 'trecurso.nombre as trecurso'],
                ['data' => 's_recurso', 'name' => 'ae_recuadmis.s_recurso'],
                ['data' => 'cantidad', 'name' => 'ae_recursos.cantidad'],
                ['data' => 'umedida', 'name' => 'umedida.nombre as umedida'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'tablaxxx' => 'datatablerecursos',
            'permisox' => 'aerecurs',
            'permnuev' => 'crearxxx',
            'parametr' => [$padrexxx],

        ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }
    public function getTablasAsistenciaADTT($padrexxx, $vercrear)
    {
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVA ASISTENCIA',
                'titulist' => 'LISTA DE ASISTENCIA',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => $padrexxx->getVerCrearAttribute(0, 'asistencia') && $vercrear,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listxxxx', [$padrexxx->id]),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FUNCIONARIO DILIGENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'RESPONSABLE APRUEBA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'funcname', 'name' => 'funcionario.name as funcname'],
                    ['data' => 'respname', 'name' => 'responsable.name as respname'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [$padrexxx->id],
            ]
        ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getTablasNnnaj($vercrear)
    {
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO CONTACTO',
            'titulist' => 'LISTA DE NNAJ',
            'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
            'vercrear' => $vercrear,
            'urlxxxxx' => route($this->opciones['routxxxx'] . '.listnnaj', [$this->opciones['asistenc'][0]]),
            'permtabl' => [
                $this->opciones['permisox'] . '-leerxxxx',
                $this->opciones['permisox'] . '-crearxxx',
                $this->opciones['permisox'] . '-editarxx',
                $this->opciones['permisox'] . '-borrarxx',
                $this->opciones['permisox'] . '-activarx',
            ],
            'cabecera' => [
                [
                    ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'NOMBRE IDENTITARIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'EDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'TIPO DE DOC', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                   
                    ['td' => 'No DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'fi_datos_basicos.sis_nnaj_id as id'],
                ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                ['data' => 's_nombre_identitario', 'name' => 'nnaj_sexos.s_nombre_identitario'],
                ['data' => 'edadxxxx', 'name' => 'nnaj_nacimis.d_nacimiento'],
                ['data' => 'tipo_docu', 'name' => 'tipo_docu.nombre as tipo_docu'],
               
                ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'tablaxxx' => 'datatable',
            'permisox' => $this->opciones['permisox'],
            'pernunna' => $this->opciones['pernunna'],
            'permnuev' => 'crearxxx',
            'parametr' => $this->opciones['asistenc'],
        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablannaj']
        ;
    }

    public function getTablasNnnajSelected()
    {
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'NUEVO CONTACTO',
            'titulist' => 'NNAJ SELECCIONADOS',
            'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
            'vercrear' => false,
            'urlxxxxx' => route($this->opciones['routxxxx'] . '.nnajsele', [$this->opciones['asistenc'][0]]),
            'permtabl' => [
                $this->opciones['permisox'] . '-leerxxxx',
                $this->opciones['permisox'] . '-crearxxx',
                $this->opciones['permisox'] . '-editarxx',
                $this->opciones['permisox'] . '-borrarxx',
                $this->opciones['permisox'] . '-activarx',
            ],
            'cabecera' => [
                [
                    ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'NOMBRE IDENTITARIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'EDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'TIPO DE DOC', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'No DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'fi_datos_basicos.sis_nnaj_id as id'],
                ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                ['data' => 's_nombre_identitario', 'name' => 'nnaj_sexos.s_nombre_identitario'],
                ['data' => 'edadxxxx', 'name' => 'nnaj_nacimis.d_nacimiento'],
                ['data' => 'tipo_docu', 'name' => 'tipo_docu.nombre as tipo_docu'],
                ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'tablaxxx' => 'datatabl',
            'permisox' => $this->opciones['permisox'],
            'pernunna' => $this->opciones['pernunna'],
            'permnuev' => 'crearxxx',
            'parametr' => $this->opciones['asistenc'],
        ];
    }
}
