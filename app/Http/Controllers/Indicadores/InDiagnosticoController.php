<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Tema;
use Illuminate\Http\Request;

class InDiagnosticoController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:inacciongestion-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:inacciongestion-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:inacciongestion-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:inacciongestion-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
        $this->opciones = [
            'permisox' => 'inacciongestion',
            'parametr' => [],
            'rutacarp' => 'Indicadores.Admin.Diagnostico.',
            'tituloxx' => 'Dianóstico',
            'nuevoxxx' => 'Nuevo Registro',
            'routinde' => 'diagnostico',
            'volverax' => 'NNAJ Línea Base',
        ];
        $this->opciones['readonly']='';
        $this->opciones['rutaxxxx']='diagnostico';
        $this->opciones['routnuev']='diagnostico';
        $this->opciones['routxxxx']='diagnostico';
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['vercrear']='';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Indicadores/Admin/Diagnostico/botones/botonesapi'],
        ];

        $this->opciones['urlxxxxx'] = 'api/indicadores/nnajlineabase';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'PRIMER NOMBRE'],
            ['td' => 'SEGUNDO NOMBRE'],
            ['td' => 'PRIMER APELLIDO'],
            ['td' => 'SEGUNDO APELLIDO'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'sis_nnajs.id'],
            ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
            ['data' => 'activo', 'name' => 'sis_nnajs.activo'],
        ];
        return view('Indicadores.Admin.Diagnostico.index', ['todoxxxx' => $this->opciones]);
    }
    public function listar_lieas_base_nnaj($nnajxxxx)
    {
        $this->opciones['vercrear']='';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Indicadores/Admin/Diagnostico/botones/botonesbase'],
        ];


        $this->opciones['urlxxxxx'] = 'api/indicadores/diagnostico';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'LÍNEA BASE'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'in_lineabase_nnajs.id'],
            ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
            ['data' => 'activo', 'name' => 'in_lineabase_nnajs.activo'],
        ];
        return view('Indicadores.Admin.Diagnostico.base', ['todoxxxx' => $this->opciones]);
    }

    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['categori'] = Tema::combo(295, true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {
            $this->opciones['estadoxx'] = $objetoxx->activo == 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InLineabaseNnaj $objetoxx)
    {
        $this->opciones['readonly'] = 'readonly';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InLineabaseNnaj $objetoxx)
    {
        $this->opciones['botoform']=[
            ['mostrars'=>true,'accionxx'=>'Editar','routingx'=>['diagnostico.editar',[]],'formhref'=>1,'tituloxx'=>''],
            ['mostrars'=>true,'accionxx'=>'Editar','routingx'=>['diagnostico.nnajbases',[$objetoxx->sis_nnaj_id]],'formhref'=>2,'tituloxx'=>'Volver a Líneas Base NNAJ'],
            ['mostrars'=>true,'accionxx'=>'Editar','routingx'=>['diagnostico',[]],'formhref'=>2,'tituloxx'=>'Volver a NNAJs'], 
             
        ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
