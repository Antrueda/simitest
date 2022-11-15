<?php

namespace App\Traits\Acciones\CentroZonal\Administracion\Modulo;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ParametrizarModuloTrait
{

    public $opciones;
    /**
     * permisos del middleware
     *

     * @return $usuariox
     */
    public function getMware()
    {
        $permisos = ['permission:'
            . $this->opciones['permmidd'] . '-modulo'
        ];
        return  $permisos;
    }
    /**
     * inicializar las opciones con las que se arman las vistas
     *
     * @return $opciones
     */
    public function getOpciones()
    {
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'ADMINISTRACIÓN CASO JURIDICO';
        $this->opciones['routxxxx'] = $this->opciones['routxxxx'];
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'JuridicaAdmin.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = 'Modulo';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        $this->opciones['tituloxx'] = "MÓDULO";
    }

    public function getBotones($dataxxxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-' . $dataxxxx[0])) {
            $this->opciones['botoform'][] = [
                'routingx' => $dataxxxx[1],
                'formhref' => $dataxxxx[2],
                'tituloxx' => $dataxxxx[3],
                'clasexxx' => $dataxxxx[4],
            ];
        }else{
            $this->opciones['botoform'][]=[];
        }
        return $this->opciones;
    }
}
