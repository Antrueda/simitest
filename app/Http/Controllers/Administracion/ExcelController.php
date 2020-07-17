<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Imports\Csd\CsdAlimentacionImport;
use App\Imports\Csd\CsdAlimentCompraImport;
use App\Imports\Csd\CsdAlimentFrecImport;
use App\Imports\Csd\CsdAlimentIngeImport;
use App\Imports\Csd\CsdAlimentPreparaImport;
use App\Imports\Csd\CsdComFamiliarObservacionesImport;
use App\Imports\Csd\CsdConclusionesImport;
use App\Imports\Csd\CsdDatosBasicosImport;
use App\Imports\Csd\CsdDinFamiliarImport;
use App\Imports\Csd\CsdDinfamIncumpleImport;
use App\Imports\Csd\CsdDinfamMadreImport;
use App\Imports\csd\CsdDinfamPadreImport;
use App\Imports\Csd\CsdImport;
use App\Imports\Csd\CsdJusticiaImport;
use App\Imports\Csd\CsdNnajEspecialImport;
use App\Imports\Csd\CsdResideambienteImport;
use App\Imports\Csd\CsdResidenciaImport;
use App\Imports\Csd\CsdViolenciaImport;
use App\Imports\Vsi\VsiActemoFisiologicaImport;
use App\Imports\Vsi\VsiConcepRedImport;
use App\Imports\Vsi\VsiDinfamAusenciaImport;
use App\Imports\Vsi\VsiDinfamCuidadorImport;
use App\Imports\Vsi\VsiDinfamMadreImport;
use App\Imports\Vsi\VsiEducacionsImport;
use App\Imports\Vsi\VsiEduCausaImport;
use App\Imports\Vsi\VsiEduDificultadImport;
use App\Imports\Vsi\VsiEduFortalezaImport;
use App\Imports\Vsi\VsiGeningDiaImport;
use App\Imports\Vsi\VsiGeningLaborImport;
use App\Imports\Vsi\VsiGeningQuienImport;
use App\Imports\Vsi\VsiRedsocActualImport;
use App\Imports\Vsi\VsiRedSocMotivoImport;
use App\Imports\Vsi\VsiRelfamAccionesImport;
use App\Imports\Vsi\VsiRelfamDificultadImport;
use App\Imports\Vsi\VsiRelFamiliarImport;
use App\Imports\Vsi\VsiRelfamMotivoImport;
use App\Imports\Vsi\VsiRelSolDificultaImport;
use App\Imports\Vsi\VsiRelSolFacilitaImport;
use App\Imports\Vsi\VsiSaludImport;
use App\Imports\Vsi\VsiSitespRiesgoImport;
use App\Imports\Vsi\VsiSitespVictimaImport;
use App\Imports\Vsi\VsiViolenciaImport;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdAlimentacion;
use App\Models\consulta\CsdConclusiones;
use App\Models\consulta\CsdDinFamiliar;
use App\Models\consulta\CsdDinfamMadre;
use App\Models\consulta\CsdDinfamPadre;
use App\Models\consulta\CsdJusticia;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\CsdViolencia;
use App\Models\consulta\pivotes\CsdAlimentCompra;
use App\Models\consulta\pivotes\CsdAlimentFrec;
use App\Models\consulta\pivotes\CsdAlimentInge;
use App\Models\consulta\pivotes\CsdAlimentPrepara;
use App\Models\consulta\pivotes\CsdNnajEspecial;
use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\sicosocial\Pivotes\VsiActemoFisiologica;
use App\Models\sicosocial\Pivotes\VsiBienvenidaMotivo;
use App\Models\sicosocial\Pivotes\VsiConcepRed;
use App\Models\sicosocial\Pivotes\VsiDinfamAusencia;
use App\Models\sicosocial\Pivotes\VsiDinfamCuidador;
use App\Models\sicosocial\Pivotes\VsiDinfamMadre;
use App\Models\sicosocial\Pivotes\VsiEduCausa;
use App\Models\sicosocial\Pivotes\VsiEduDificultad;
use App\Models\sicosocial\Pivotes\VsiEduFortaleza;
use App\Models\sicosocial\Pivotes\VsiGeningDia;
use App\Models\sicosocial\Pivotes\VsiGeningLabor;
use App\Models\sicosocial\Pivotes\VsiGeningQuien;
use App\Models\sicosocial\Pivotes\VsiRedsocActual;
use App\Models\sicosocial\Pivotes\VsiRedSocMotivo;
use App\Models\sicosocial\Pivotes\VsiRelfamAcciones;
use App\Models\sicosocial\Pivotes\VsiRelfamDificultad;
use App\Models\sicosocial\Pivotes\VsiRelfamMotivo;
use App\Models\sicosocial\Pivotes\VsiRelSolDificulta;
use App\Models\sicosocial\Pivotes\VsiRelSolFacilita;
use App\Models\sicosocial\Pivotes\VsiSitespRiesgo;
use App\Models\sicosocial\Pivotes\VsiSitespVictima;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\sicosocial\VsiBienvenida;
use App\Models\sicosocial\VsiEducacion;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\sicosocial\VsiRedSocial;
use App\Models\sicosocial\VsiRelFamiliar;
use App\Models\sistema\SisEsta;

use App\Models\sicosocial\VsiDinFamiliar;
use App\Models\sicosocial\VsiSalud;
use App\Models\sicosocial\VsiViolencia;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

    public function armarSeeder()
    {
        $dataxxxx = VsiSalud::get();
        foreach ($dataxxxx as $registro) {
            echo "VsiSalud::create([
                'vsi_id' => {$registro->vsi_id},
                'prm_atencion_id' => {$registro->prm_atencion_id},
                'prm_condicion_id' => {$registro->prm_condicion_id},
                'prm_medicamento_id' => {$registro->prm_medicamento_id},
                'prm_prescripcion_id' => {$registro->prm_prescripcion_id},
                'prm_sexual_id' => {$registro->prm_sexual_id},
                'prm_activa_id' => {$registro->prm_activa_id},
                'prm_embarazo_id' => {$registro->prm_embarazo_id},
                'prm_hijo_id' => {$registro->prm_hijo_id},
                'prm_interrupcion_id' => {$registro->prm_interrupcion_id},
                'medicamento' => {$registro->medicamento},
                'descripcion' => {$registro->descripcion},
                'edad' => {$registro->edad},
                'embarazo' => {$registro->embarazo},
                'hijo' => {$registro->hijo},
                'interrupcion' => {$registro->interrupcion},
                'user_crea_id' => {$registro->user_crea_id},
                'user_edita_id' => {$registro->user_edita_id},
                'sis_esta_id' => {$registro->sis_esta_id},
                'created_at' => {$registro->created_at},
                'updated_at' => {$registro->updated_at},
                

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
        Excel::import(new VsiSaludImport(), $excelxxx);
        // return redirect()->route('excel.nuevo')->with('info', 'Registro migracion realizada con éxito');
    }
}