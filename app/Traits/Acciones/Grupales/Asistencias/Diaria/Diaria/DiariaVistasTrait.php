<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria\Diaria;

use App\Models\sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DiariaVistasTrait
{
    public function getVista($dataxxxx)
    {
        $localidx = 0;
        $modeloxx = null;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['activida'] = $this->getTemacomboCT([
            'temaxxxx' => 429,
        ])['comboxxx'];


        $this->opciones['lugarxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 428,
        ])['comboxxx'];

        $this->opciones['grupoxxx'] = ['' => 'Seleccione'];
        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
        $this->opciones['localida'] = ['' => 'Seleccione'];
        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['barrioxx'] = ['' => 'Seleccione'];
        $this->opciones['readonly'] = 'readonly';
        if ($dataxxxx['modeloxx'] != '') {
            $respuest = $this->setDependen([
                'dependen' => $dataxxxx['modeloxx']->sis_depen_id,
                'lugarxxx' => $dataxxxx['modeloxx']->prm_lugactiv_id,
                'ajaxxxxx' => false
            ]);
            $this->opciones['departam'] = $respuest['combosxx'][0];
            $this->opciones['municipi'] = $respuest['combosxx'][1];
            $this->opciones['localida'] = $respuest['combosxx'][2];
            $this->opciones['upzxxxxx'] = $respuest['combosxx'][3];
            $this->opciones['barrioxx'] = $respuest['combosxx'][4];
            $respuest = $this->setPaginaGrupos(['ajaxxxxx' => false, 'progacti' => $dataxxxx['modeloxx']->prm_actividad_id]);
            $this->opciones['grupoxxx'] = $respuest['combosxx'][0];
            if (!$respuest['readonly']) {
                $this->opciones['readonly'] = '';
            }
            $dataxxxx['modeloxx']->fechdili=explode(' ',$dataxxxx['modeloxx']->fechdili)[0];
        }

        $this->opciones['dependen'] = $this->getUpiUsuarioCT([], $modeloxx);
        $this->opciones['rutarchi'] =  'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
    }
    public function view($dataxxxx)
    {
        $upidxxxx = 0;
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A ASISTENCIAS DIARIAS']);
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4] = true;
            $upidxxxx = $dataxxxx['modeloxx']->sis_depen_id;
            $this->pestania[0][2] = $this->opciones['parametr'];
            $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'NUEVA ASISTENCIA']);
            $this->getAsdSisNnaj();
        }

        $this->opciones['servicio']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
