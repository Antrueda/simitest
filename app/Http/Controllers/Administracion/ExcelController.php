<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Vsi\VsiActEmocionalImport;
use App\Imports\Vsi\VsiActEmocionalsImport;
use App\Imports\Vsi\VsiAntecedenteImport;
use App\Models\sistema\SisEsta;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\Vsi\VsiBienvenidaImport;
use App\Imports\Vsi\VsiBienvenidaMotivoImport;
use App\Imports\Vsi\VsiConceptoImport;
use App\Imports\Vsi\VsiConsumoImport;
use App\Imports\Vsi\VsiDatosVinculaImport;
use App\Imports\Vsi\VsiDinFamiliarImport;
use App\Imports\Vsi\VsiEducacionImport;
use App\Imports\Vsi\VsiEducacionsImport;
use App\Imports\Vsi\VsiEmocionVinculaImport;
use App\Imports\Vsi\VsiGenIngresoImport;
use App\Imports\Vsi\VsiRedSocialImport;
use App\Imports\Vsi\VsiRelfamAccionesImport;
use App\Imports\Vsi\VsiRelfamDificultadImport;
use App\Imports\Vsi\VsiRelFamiliarImport;
use App\Imports\Vsi\VsiRelfamMotivoImport;
use App\Imports\Vsi\VsiRelSocialesImport;
use App\Imports\Vsi\VsiSaludImport;
use App\Imports\Vsi\VsisImport;
use App\Imports\Vsi\VsiSitEspecialImport;
use App\Imports\Vsi\VsiSituacionVinculaImport;
use App\Models\sicosocial\Pivotes\VsiBienvenidaMotivo;
use App\Models\sicosocial\Pivotes\VsiEmocionVincula;
use App\Models\sicosocial\Pivotes\VsiRelfamAcciones;
use App\Models\sicosocial\Pivotes\VsiRelfamDificultad;
use App\Models\sicosocial\Pivotes\VsiRelfamMotivo;
use App\Models\sicosocial\Pivotes\VsiSituacionVincula;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiActEmocional;
use App\Models\sicosocial\VsiAntecedente;
use App\Models\sicosocial\VsiBienvenida;
use App\Models\sicosocial\VsiConcepto;
use App\Models\sicosocial\VsiConsumo;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\sicosocial\VsiDinFamiliar;
use App\Models\sicosocial\VsiEducacion;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\sicosocial\VsiRedSocial;
use App\Models\sicosocial\VsiRelFamiliar;
use App\Models\sicosocial\VsiRelSociales;
use App\Models\sicosocial\VsiSalud;
use App\Models\sicosocial\VsiSitEspecial;

class ExcelController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'excel',
            'routinde' => 'excel',
            'parametr' => [],
            'volverax' => '',
            'rutacarp' => 'Administracion.Excel.',
            'tituloxx' => 'Subir: excel',
            'slotxxxx' => 'excel',
            'carpetax' => 'Excel',
            'indecrea' => false,
            'esindexx' => false
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'excel';
        $this->opciones['routnuev'] = 'excel';
        $this->opciones['routxxxx'] = 'excel';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->opciones['tablasxx'][] =
            [

                'titunuev' => 'NUEVA EPS',
                'titulist' => 'LISTA DE EPS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadoxx'],
                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/administracion/eps',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'EPS'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'eps.id'],
                    ['data' => 'nombre', 'name' => 'eps.nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'tablaeps',
                'permisox' => $this->opciones['permisox'],
                'parametr' => [],
                'routxxxx' => $this->opciones['routxxxx'],
            ];


        $this->opciones['padrexxx'] = '';

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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->opciones['padrexxx'] = '';
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'pestanias');
    }

    // ------------------------------------------------------------------------------------------------------

    public function armarSeeder()
    {
        $dataxxxx = VsiEmocionVincula::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiEmocionVincula::create([
                'parametro_id' => {$registro->parametro_id},
                'vsi_datos_vincula_id' => {$registro->vsi_datos_vincula_id},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
            ]); <br />";;
        }
    }


    /**
     * Store a newly created resource in storage.
     * toma los datos existentes en el archivo XLS y los importa a la tabla
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $excelxxx = $request->file('excelxxx');
        Excel::import(new VsiEmocionVinculaImport(), $excelxxx);
        //return redirect()->route('excel.nuevo')->with('info', 'Rem,mgistro migracion realizada con éxito');
    }
}