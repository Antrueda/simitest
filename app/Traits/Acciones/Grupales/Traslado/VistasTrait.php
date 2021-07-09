<?php

namespace App\Traits\Acciones\Grupales\Traslado;

use App\Models\Acciones\Grupales\AgSubtema;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Indicadores\Area;
use App\Models\Parametro;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEsta;
use app\Models\Sistema\SisServicio;
use App\Models\Tema;
use App\Models\User;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
    
    public function view($opciones, $dataxxxx)
    {

        $opciones['areaxxxx'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['traslado'] = Tema::combo(392, true, false);
        $opciones['condixxx'] = Tema::combo(272, false, false);
        $opciones['dependen'] = User::getUpiUsuario(true, false);
        $opciones['depender'] = SisDepen::combo(true, false);
        $dependen=0;
      
        $opciones['usuarioz'] = User::getUsuario(false, false);
        $opciones['document'] = Auth::user()->s_documento;
        $opciones['cargoxxx'] = Auth::user()->sis_cargo->s_cargo;
        $opciones['lugarxxx'] =  Parametro::find(235)->combo;
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            foreach (explode('/', $dataxxxx['modeloxx']->s_doc_adjunto) as $value) {
                $opciones['archivox'] = $value;
            }
            $dependen = $dataxxxx['modeloxx']->prm_trasupi_id;
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['document'] =$dataxxxx['modeloxx']->responsable->s_documento;
            $opciones['cargoxxx'] =$dataxxxx['modeloxx']->responsable->sis_cargo->s_cargo;
            $opciones['usuarioz'] = User::getRes(false, false,$dataxxxx['modeloxx']->responsable_id);

         }
         
         $opciones['servicio'] = SisServicio::getServicioDepe([
            'dependen' =>$dependen,
            'cabecera' => true,
            'ajaxxxxx' => false,
            ]);
            
        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);






        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}