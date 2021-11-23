<?php

namespace App\Traits\Indicadores\Administ\Indiliba;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndilibaVistasTrait
{

    public function view()
    {
        $this->opciones['areaxxxx']=[];
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A LINEAS BASE', 'parametr' => [$this->padrexxx->id]]);
        $this->getVista();
        // indica si se esta actualizando o viendo
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr'][]=$this->opciones['modeloxx']->id;
            $this->opciones['modeloxx'] = $this->opciones['modeloxx'];
            $this->pestania[0]['pesthija'][1]['parametr']=$this->opciones['modeloxx']->in_areaindi_id;
            $this->pestania[0]['pesthija'][2]['parametr']=$this->opciones['parametr'];
            $this->opciones['fechcrea'] = $this->opciones['modeloxx']->created_at;
            $this->opciones['fechedit'] = $this->opciones['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $this->opciones['modeloxx']->userCrea->name;
            $this->opciones['useredit'] = $this->opciones['modeloxx']->userEdita->name;
        }
        $this->getPestanias(['tipoxxxx'=>$this->opciones['permisox']]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
