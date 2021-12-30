<?php

namespace App\Traits\AsisSema\AsisSema;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AsisSemaVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['sis_depens'] = $this->getDepenTerritorioAECT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ], false)['comboxxx'];
        $this->opciones['prm_acti'] = $this->getTemacomboCT([
            'temaxxxx'=>413,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['gruposxx'] = 
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view( $dataxxxx)
    {
        $upidxxxx = 0;
        $servicio = 0;
        $grupoxxx = 0;
        $gradoxxx = 0;
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], []], 2, 'VOLVER A ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $upidxxxx = $dataxxxx['modeloxx']->sis_depen_id;
            $servicio = $dataxxxx['modeloxx']->sis_servicio_id;
            $grupoxxx = $dataxxxx['modeloxx']->prm_grupo_id;
            $gradoxxx = $dataxxxx['modeloxx']->sis_servicio_id;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', []], 2, 'NUEVA ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        }
        $this->opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);
        $this->opciones['gruposxx'] = $this->getGrupoAsignar([
            'dependen' => $upidxxxx,
            'servicio' => $servicio,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'orderxxx' => 'ASC',
        ]);
        $this->opciones['gradosxx'] = $this->getGradoAsignar([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'orderxxx' => 'ASC',
            'dependen' => $upidxxxx,
            'servicio' => $servicio,
        ]);
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
