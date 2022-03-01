<?php

namespace app\Http\Controllers\Acciones\Individuales\Educacion\FormatoValoracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\FormatoValoracionCrearRequest;
use App\Http\Requests\Acciones\Individuales\FormatoValoracionEditarRequest;
use App\Http\Requests\Acciones\Individuales\MatriculaCursoCrearRequest;
use App\Http\Requests\Acciones\Individuales\MatriculaCursoEditarRequest;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;

use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion\CrudTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion\VistasTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FormatoValoracionController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

    private $padrexxx = null;
 

    public function __construct()
    {
        
        $this->opciones['permisox'] = 'formatov';
        $this->opciones['routxxxx'] = 'formatov';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ValoraComp $padrexxx)
    {
        $this->opciones['tablinde']=true;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
       
        
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones,'padrexxx' => $this->opciones['usuariox']->id])]);
    }


    public function create(ValoraComp $padrexxx)
    {
        // ddd(count(CursoModulo::where('cursos_id', 1)
        // ->where('sis_esta_id', 1)->get()));

        // ddd(MatriculaCurso::select('curso_id')->where('id', 1)
        // ->where('sis_esta_id', 1)->first()->curso_id);
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['vercrear'] = false;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->pestanix[0]['dataxxxx'] = [true, $padrexxx->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);

        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(FormatoValoracionCrearRequest $request,ValoraComp $padrexxx)
    {//
        $matricurso=MatriculaCurso::select('curso_id')->where('id', $request['cursos_id'])
        ->where('sis_esta_id', 1)->first()->curso_id;
        $unidades=count(CursoModulo::where('cursos_id', $matricurso)
          ->where('sis_esta_id', 1)->get());
        $request->request->add(['sis_esta_id'=> 1]);
        $request->request->add(['unidades'=> $unidades]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);
        //ddd($request->request->all());
        return $this->setFormatoValoracion([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $padrexxx,
            'infoxxxx' =>       'Valoración de competencias creado con éxito, por favor realizar las clasificación de las unidades',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(UniComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'AGREGAR NUEVO TALLER', 'btn btn-sm btn-primary']);
        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function edit(UniComp $modeloxx)
    {
      //  ddd(count($modeloxx->curso->Modulo));
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['padrexxx'] = $modeloxx->nnaj;
        $this->opciones['vercrear'] = true;
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A TALLERES', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->nnaj->id]], 2, 'AGREGAR NUEVO TALLER', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->nnaj]
        );
    }


    public function update(FormatoValoracionEditarRequest $request,  UniComp $modeloxx)
    {
        
        $request->request->add(['sis_nnaj_id'=> $modeloxx->nnaj->id]);
        return $this->setFormatoValoracion([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx->nnaj,
            'infoxxxx' => 'Matricula Curso editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(UniComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A TALLERES', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, UniComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado inactivado correctamente');
    }

    public function activate(UniComp $modeloxx)
    {
        $this->pestanix[0]['dataxxxx'] = [true, $modeloxx->nnaj->id];
        $this->padrexxx = $modeloxx->nnaj;
        $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->nnaj->id]], 2, 'VOLVER A TALLERES', 'btn btn-sm btn-primary']);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, UniComp $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado activado correctamente');
    }
}
