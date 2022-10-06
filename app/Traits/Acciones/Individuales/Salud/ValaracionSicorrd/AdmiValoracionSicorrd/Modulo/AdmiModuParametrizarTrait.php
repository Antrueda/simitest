<?php

namespace  App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\Modulo;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiModuParametrizarTrait
{
    public $opciones;
    /**
     * permisos del middleware
     *
     * @return $usuariox
     */
    public function getMware()
    {
        $permisos = [
            'permission:'
                . $this->opciones['permmidd'] . '-moduloxx'
        ];
        return  $permisos;
    }

    public function getOpciones()
    {
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'ADMINISTRACIÓN VALORACIÓN PSICOSOCIAL COMPONENTE DE REDUCCIÓN DE RIESGOS Y DAÑOS';
        $this->opciones['routxxxx'] = $this->opciones['permisox'];
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Acciones.Individuales.Salud.ValaracionSicorrd.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = 'AdmiValoracionSicorrd.';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        $this->opciones['tituloxx'] = "MÓDULO";
    }
}
