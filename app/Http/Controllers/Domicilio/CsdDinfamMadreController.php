<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiSustanciaConsumidaCrearRequest;
use App\Http\Requests\FichaIngreso\FiSustanciaConsumidaUpdateRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdDinfamMadre;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSustanciaConsumida;

use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsdDinfamMadreController extends Controller
{
    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'csddfmad';
        $this->opciones['routxxxx'] = 'csddfmad';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'dimfamiliar';
        $this->opciones['slotxxxx'] = 'csddinfamiliar';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "DINAMICA FAMILIAR";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['sustanci'] = Tema::combo(53, true, false);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['botoform'][] = [
            'mostrars' => true, 'accionxx' => '', 'routingx' => ['csddinfamiliar.nuevo', []],
            'formhref' => 2, 'tituloxx' => "VOLVER A CONSUMO SPA", 'clasexxx' => 'btn btn-sm btn-primary'
        ];
    }

    private function view($dataxxxx)
    {
        $this->opciones['diaxxxxx'] = 0;
        $this->opciones['mesxxxxx'] = 0;
        $this->opciones['anoxxxxx'] = 0;
        $this->opciones['hijoxxxx'] = 0;
        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['separaci'] = Tema::combo(176, true, false);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';

        $this->opciones['servicio'] = ['' => 'seleccione'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['botoform'][0]['routingx'][1] = $dataxxxx['padrexxx']->id;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {

            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR RELACION',
                'titulist' => 'LISTA DE RELACIONES DEL PROGENITORA',
                'dataxxxx' => [],
                'vercrear' => true,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'urlxxxxx' => route( 'csddinfamiliar.listamxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'CONVIVIERON', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'TIEMPO DE CONVIVENCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => '# HIJOS(AS)', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'MOTIVO DE SEPARACION', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'DIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'AñO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_dinfam_madres.id'],
                    ['data' => 'convive', 'name' => 'convive.nombre as convive'],
                    ['data' => 'dia', 'name' => 'csd_dinfam_madres.dia'],
                    ['data' => 'mes', 'name' => 'csd_dinfam_madres.mes'],
                    ['data' => 'ano', 'name' => 'csd_dinfam_madres.ano'],
                    ['data' => 'hijo', 'name' => 'csd_dinfam_madres.hijo'],
                    ['data' => 'separado', 'name' => 'separado.nombre as separado'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablemadre',
                'permisox' => 'csddfmad',
                'routxxxx' => 'csddfmad',
                'parametr' => [$dataxxxx['padrexxx']->id],
            ],
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Csd $padrexxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'progenitora'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('csddfmad.editar', [$padrexxx->id, CsdDinfamMadre::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request, Csd $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->id;
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Sustancia creada con exito', $padrexxx);
    }


    public function show(Csd $padrexxx, CsdDinfamMadre $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'progenitora'], 'padrexxx' => $padrexxx]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiSustanciaprogenitora $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx, CsdDinfamMadre $modeloxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'progenitora'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\FiSustanciaConsumida $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiSustanciaConsumidaUpdateRequest $request,  Csd $padrexxx, CsdDinfamMadre $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Sustancia actualizada con exito', $padrexxx);
    }

    public function inactivate(Csd $padrexxx,CsdDinfamMadre $modeloxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['destroy','destroy'],'padrexxx'=>$padrexxx]);
    }
    public function destroy(Csd $padrexxx,CsdDinfamMadre $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('csddinfamiliar.nuevo', [$padrexxx->id])
            ->with('info', 'Red actual inactivada correctamente');
    }
}