<?php

namespace App\Traits\Acciones\Grupales\GestMatrAcademica\GestMatrAcademica;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['prm_estado_matris'] = $this->getTemacomboCT([
            'temaxxxx'=>432,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.jsp']
        ];
    }
    public function view( $dataxxxx)
    {

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], []], 2, 'VOLVER A ACTAS DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        $this->opciones['parametr']= [$dataxxxx['padrexxx']];
        $this->opciones['datapadre'] = $this->getNnajMatricula($dataxxxx['padrexxx']);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', []], 2, 'NUEVA ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        }
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
