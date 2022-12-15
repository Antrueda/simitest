<?php

namespace App\Http\Controllers\Acciones\Individuales\Emprendimiento\Egreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Emprender\EgresoCrearRequest as EmprenderEgresoCrearRequest;
use App\Models\Acciones\Individuales\Emprender\Egreso\SEgreso;
use App\Models\sistema\SisNnaj;
use App\Traits\Acciones\Individuales\Emprender\Egreso\Seguimiento\CrudTrait;
use App\Traits\Acciones\Individuales\Emprender\Egreso\Seguimiento\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Emprender\Egreso\Seguimiento\VistasTrait;
use App\Traits\Acciones\Individuales\Emprender\Egreso\ListadosTrait;
use App\Traits\Acciones\Individuales\Emprender\Egreso\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EgresoSeguimientoController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

    

    public function __construct()
    {
        
        $this->opciones['permisox'] = 'egresopost';
        $this->opciones['routxxxx'] = 'egresopost';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create(SEgreso $padrexxx)
    {
        $this->padrexxx = $padrexxx;
        
        $this->opciones['usuariox'] = $padrexxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['valoraci'] = $padrexxx;

        

        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $padrexxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $padrexxx->id];
        $this->pestanix[2]['checkxxx'] = 1;
      
        if($padrexxx->derechos){
            $this->pestanix[3]['routexxx'] = '.editar';
            $this->pestanix[3]['dataxxxx'] = [true, $padrexxx->examenes->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        
        if($padrexxx->redes){
            $this->pestanix[4]['routexxx'] = '.editar';
            $this->pestanix[4]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[4]['checkxxx'] = 0;
        }
        if($padrexxx->seguimiento){
            $this->pestanix[5]['routexxx'] = '.editar';
            $this->pestanix[5]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[5]['checkxxx'] = 1;
        }else{
            $this->pestanix[5]['routexxx'] = '.nuevo';
            $this->pestanix[5]['dataxxxx'] = [true, $padrexxx];
            $this->pestanix[5]['checkxxx'] = 0;
        }
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(EmprenderEgresoCrearRequest $request,SEgreso $padrexxx)
    {//

        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);
        return $this->setEgreso([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' => 'Valoracion odontologica creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(SEgreso $modeloxx)
    {
   
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        $this->pestanix[2]['checkxxx'] = 1;
      
        if($modeloxx->derechos){
            $this->pestanix[3]['routexxx'] = '.editar';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->examenes->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        
        if($modeloxx->redes){
            $this->pestanix[4]['routexxx'] = '.editar';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[4]['checkxxx'] = 0;
        }
        if($modeloxx->seguimiento){
            $this->pestanix[5]['routexxx'] = '.editar';
            $this->pestanix[5]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[5]['checkxxx'] = 1;
        }else{
            $this->pestanix[5]['routexxx'] = '.nuevo';
            $this->pestanix[5]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[5]['checkxxx'] = 0;
        }
        

        
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->padrexxx = $modeloxx->nnaj;
        
        $this->opciones['vercrear'] = false;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVA VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view($do,['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }





    public function edit(SEgreso $modeloxx)
    {    
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[2]['dataxxxx'] = [true, $modeloxx->id];
        $this->pestanix[2]['checkxxx'] = 1;
      
        if($modeloxx->derechos){
            $this->pestanix[3]['routexxx'] = '.editar';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx->examenes->id];
            $this->pestanix[3]['checkxxx'] = 1;
        }else{
            $this->pestanix[3]['routexxx'] = '.nuevo';
            $this->pestanix[3]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[3]['checkxxx'] = 0;
        }
        
        if($modeloxx->redes){
            $this->pestanix[4]['routexxx'] = '.editar';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[4]['checkxxx'] = 1;
        }else{
            $this->pestanix[4]['routexxx'] = '.nuevo';
            $this->pestanix[4]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[4]['checkxxx'] = 0;
        }
        if($modeloxx->seguimiento){
            $this->pestanix[5]['routexxx'] = '.editar';
            $this->pestanix[5]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[5]['checkxxx'] = 1;
        }else{
            $this->pestanix[5]['routexxx'] = '.nuevo';
            $this->pestanix[5]['dataxxxx'] = [true, $modeloxx];
            $this->pestanix[5]['checkxxx'] = 0;
        }
      
        
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['vercrear'] = true;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A SEGUMIENTO DE EGRESO', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->nnaj]
        );
    }


    public function update(EmprenderEgresoCrearRequest $request,  SEgreso $modeloxx)
    {
        
        $request->request->add(['sis_nnaj_id'=> $modeloxx->nnaj->id]);
        return $this->setEgreso([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Valoracion odontologica editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(SEgreso $modeloxx)
    {
        
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['vercrear'] = false;
        $this->opciones['diagnost'] = '.listaxxz';
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, SEgreso $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Valoracion odontologica inactivado correctamente');
    }

    public function activate(SEgreso $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->pestanix[1]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['valoraci'] = $modeloxx;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A VALORACIÓN MEDICINA GENERAL', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, SEgreso $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Valoracion odontologica activado correctamente');
    }
}