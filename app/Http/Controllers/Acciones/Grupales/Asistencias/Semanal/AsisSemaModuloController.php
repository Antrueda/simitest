<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Semanal;

use App\Http\Controllers\Controller;


class AsisSemaModuloController extends Controller
{
    // use AsisSemaListadosTrait; // trait que arma las consultas para las datatables
    // use AsisSemaParametrizarModuloTrait; // trait donde se inicializan las opciones de configuracion
    // use AsisSemaDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    // use AsisSemaVistasModuloTrait; // trait que arma la logica para lo metodos: crud
    // use AsisSemaPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permmidd'] = 'assemodu';
        $this->opciones['permisox'] = 'assemodu';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
       $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}