<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\VOdontologia;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\VOdontoantecentesCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\VOdontoantecentesEditarRequest;

use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Examenes\CrudTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Examenes\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Examenes\VistasTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Examenes\ListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Odontologia\Examenes\PestaniasTrait;
use App\Traits\Combos\CombosTrait;

use App\Models\Acciones\Individuales\Salud\Odontologia\VOdonexamen;

class VOdonExamenesController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

    

    public function __construct()
    {
        
        $this->opciones['permisox'] = 'vodonexamens';
        $this->opciones['routxxxx'] = 'vodonexamens';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(VOdontologia $padrexxx)
    {

        if($padrexxx->examenes){
            return redirect()
            ->route('vodonexamens.editar', [$padrexxx->examenes->id]);
        }
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['valoraci'] = $padrexxx;

        //ddd($this->opciones['permisox'] .$this->opciones['diagnost'],  $this->opciones['valoraci']);

        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[3]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(VOdontoantecentesCrearRequest $request,VOdontologia $padrexxx)
    {//
        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['odonto_id'=> $padrexxx->id]);
        return $this->setOdoAntecedente([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Examenes creados con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(VOdonexamen $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        
        
        
        $this->opciones['usuariox'] = $modeloxx->odontologia->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->odontologia;
        $this->opciones['valoraci'] = $modeloxx;
        $this->padrexxx = $modeloxx->odontologia->nnaj;
        
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVA VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view($do,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }

    public function edit(VOdonexamen $modeloxx)
    {    
        $this->pestanix[2]['routexxx'] = '.editar';
        //ddd( $this->pestanix[2]['routexxx']);
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->odontologia->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        $this->opciones['usuariox'] = $modeloxx->odontologia->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->odontologia;
        $this->opciones['valoraci'] = $modeloxx;
        $this->padrexxx = $modeloxx->odontologia;
        $this->opciones['vercrear'] = true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view($this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->odontologia]
        );
    }


    public function update(VOdontoantecentesEditarRequest $request,  VOdonexamen $modeloxx)
    {
        $request->request->add(['odonto_id'=> $modeloxx->odontologia->id]);
        
        return $this->setOdoAntecedente([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Examenes editados con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


}