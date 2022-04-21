<?php

namespace App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional;
use App\Models\User;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait PvVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view( $dataxxxx)
    {
        $this->opciones['matricula_academica'] = $this->getMatriculaAcademicaNnaj($dataxxxx['padrexxx']->id);
        $this->opciones['matricula_talleres'] = $this->getMatriculaTalleresNnaj($dataxxxx['padrexxx']->id);
        
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        $this->opciones['actividades'] = $this->getActividadesPvf();

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
        
            $this->opciones['datagrafica'] = $dataxxxx['modeloxx']->areasCountActividades();
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['modeloxx']->actividades = $dataxxxx['modeloxx']->getActividades();
            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false,$dataxxxx['modeloxx']->user_fun_id);
        }else{
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'PerfilVocacional.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
