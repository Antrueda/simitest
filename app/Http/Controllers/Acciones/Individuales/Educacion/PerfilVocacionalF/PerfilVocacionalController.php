<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilVocacionalF;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\Ejemplo\AeEncuentro;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Ejemplo\AeEncuentroCrearRequest;
use App\Http\Requests\Ejemplo\AeEncuentroEditarRequest;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvParametrizarTrait;

class PerfilVocacionalController extends Controller
{
    use PvParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PvPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use PvListadosTrait; // trait que arma las consultas para las datatables
    use PvCrudTrait; // trait donde se hace el crud de localidades

    use PvDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use PvVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'pvocacif';
        $this->opciones['routxxxx'] = 'pvocacif';
        $this->getOpciones();
        $this->middleware($this->getMware());

        $this->pestania2[0][4]=true;
        $this->pestania2[0][5] = 'active';
    }

    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->pestania2[0][2]=$padrexxx->id;

        $this->getPestanias([]);
        $this->getTablas($padrexxx->id);
        return view($this->opciones['rutacarp'] . 'PerfilVocacional.pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisNnaj $padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }
    public function store(AeEncuentroCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Acta de encuentro creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(AeEncuentro $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(AeEncuentro $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(AeEncuentroEditarRequest $request,  AeEncuentro $modeloxx)
    {
        return $this->setAeEncuentro([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Acta de encuentro editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AeEncuentro $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, AeEncuentro $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Acta de encuentro inactivada correctamente');
    }

    public function activate(AeEncuentro $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, AeEncuentro $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Acta de encuentro activada correctamente');
    }
}
