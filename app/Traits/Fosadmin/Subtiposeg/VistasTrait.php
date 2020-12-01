<?php

namespace App\Traits\Fosadmin\SubTiposeg;

use App\Models\fichaobservacion\FosTse;
use App\Models\Indicadores\Area;
use App\Models\Sistema\SisEsta;
use App\Models\Usuario\Estusuario;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['fosareas'] = Area::comb(true,false);
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

        $opciones = $this->getVista($opciones, $dataxxxx);
        $opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $selected=0;
        $estadoid = 1;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->area_id=$dataxxxx['modeloxx']->fos_tse->area_id;
            $selected=$dataxxxx['modeloxx']->area_id;
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $estadoid=$dataxxxx['modeloxx']->sis_esta_id;
        }

        $opciones['motivoxx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $estadoid ,
            'formular' => 2481
        ]);
        $opciones['tiposegu'] =FosTse::combo($selected, true, false);
        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}