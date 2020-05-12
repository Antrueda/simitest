<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InIndicadorCrearRequest;
use App\Http\Requests\Indicadores\InIndicadorUpdateRequest;
use App\Models\Indicadores\Area;
use App\Models\Indicadores\InIndicador;
use App\Models\sistema\SisEsta;

class InIndicadorController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'readonly' => '',
            'permisox' => 'indicador',
            'parametr' => [],
            'rutacarp' => 'Indicadores.Admin.',
            'tituloxx' => 'Indicador',
            'slotxxxy' => 'diagnost',
            'slotxxxx' => 'indicador',
            'carpetax' => 'Indicador',
            'indecrea' => false,
            'esindexx' => false,
            'pestania' => [
                'indicado'=>['',true],
                'linebase'=>['disabled',false],
                'docufuen'=>['disabled',true],
                'grupoxxx'=>['disabled',false],
                'pregunta'=>['disabled',false],
                'respuest'=>['disabled',false]
            ]
        ];
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);
        $this->opciones['rutaxxxx'] = 'in.indicador';
        $this->opciones['routnuev'] = 'in.indicador';
        $this->opciones['routxxxx'] = 'in.indicador';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A INDICADORES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index(Area $padrexxx)
    {
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'INDICADOR',
                'titulist' => 'LISTA DE INDICADORES',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadoxx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/indicadores/indicador',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'INDICADOR'],
                    ['td' => 'ÁREA'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_indicadors.id'],
                    ['data' => 's_indicador', 'name' => 'in_indicadors.s_indicador'],
                    ['data' => 'nombre', 'name' => 'areas.nombre'],
                    ['data' => 'sis_esta_id', 'name' => 'in_indicadors.sis_esta_id'],
                ],
                'tablaxxx' => 'tablaindicadores',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'in.indicador',
                'parametr' => [$padrexxx->id],
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    public function create(Area $padrexxx)
    {
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function store(Area $padrexxx, InIndicadorCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    public function show(Area $padrexxx, InIndicador $objetoxx)
    {
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $objetoxx->id];
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function edit(Area $padrexxx, InIndicador $objetoxx)
    {
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
            $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [ 'lbf.basefuente', [$padrexxx->id,$objetoxx->id]],
                'formhref' => 2, 'tituloxx' => 'ASINGAR LÍNEAS BASE', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'pestanias');
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $indicado = InIndicador::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$indicado->area_id, $indicado->id])
            ->with('info', $infoxxxx);
    }

    public function update(Area $padrexxx, InIndicadorUpdateRequest  $request, InIndicador $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy(Area $padrexxx, InIndicador $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
