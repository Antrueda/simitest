<?php

namespace App\Traits\Actaencu\Nnajs;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait NnajsVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['localida']=$this->getLocalidadesCT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['tpviapal'] = $this->getTemacomboCT([
            'temaxxxx'=>62,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['alfabeto'] = $this->getTemacomboCT([
            'temaxxxx'=>39,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['dircondi'] = $this->getTemacomboCT([
            'temaxxxx'=>23,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['cuadrant'] = $this->getTemacomboCT([
            'temaxxxx'=>38,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view( $dataxxxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A CONTACTOS', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        $this->pestania[1][2]=$dataxxxx['padrexxx']->aeEncuentro->id;
        $this->pestania[2][2]=$dataxxxx['padrexxx']->aeEncuentro->id;

        $localidx = 0;
        $upzselec=0;
        if ($dataxxxx['modeloxx'] != '') {
            $localidx = $dataxxxx['modeloxx']->sis_localidad_id;
            $upzselec=$dataxxxx['modeloxx']->sis_upz_id;
            $this->opciones['parametr'][]=$dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['modeloxx']->id]], 2, 'NUEVA CONTACTO', 'btn btn-sm btn-primary']);
        }
        $this->opciones['upzxxxxx'] = $this->getUpzsComboCT([
            'localidx' => $localidx,
            'cabecera' => true,
            'ajaxxxxx' => false
        ]);
        $this->opciones['barrioxx'] = $this->getBarriosComboCT([
            'localidx' => $localidx,
            'upzidxxx' => $upzselec,
            'cabecera' => true,
            'ajaxxxxx' => false
        ]);
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
