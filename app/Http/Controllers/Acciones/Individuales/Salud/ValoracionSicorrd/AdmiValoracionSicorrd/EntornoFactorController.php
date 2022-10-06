<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\ValoracionSicorrd\AdmiValoracionSicorrd;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntorFactor;
use App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntornoFactorCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntornoFactorEditarRequest;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdCrudTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdListadosTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiVsrrdDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiEntornoFactor\AdmiEntornoFactorVistasTrait;
use App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiEntornoFactor\AdmiEntornoFactorParametrizarTrait;

class EntornoFactorController extends Controller
{
    use AdmiEntornoFactorVistasTrait;
    use AdmiEntornoFactorParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use AdmiVsrrdDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AdmiVsrrdListadosTrait; // trait que arma las consultas para las datatables
    use AdmiVsrrdPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use AdmiVsrrdCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'vsrrdeyf';
        $this->opciones['routxxxx'] = 'vsrrdeyf';
        $this->pestania[2][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        $this->getTablasAsociarEntornoFactor();
        return view($this->opciones['rutacarp'] . 'AdmiValoracionSicorrd.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR ASOCIACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
    }

    public function store(VsrrdEntornoFactorCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setEntornoFactor([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'asociar entorno factor creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(VsrrdEntorFactor $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }

    public function edit(VsrrdEntorFactor $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ASOCIACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }

    public function update(VsrrdEntornoFactorEditarRequest $request, VsrrdEntorFactor $modeloxx)
    {
        return $this->setEntornoFactor([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'asociar entorno factor editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(VsrrdEntorFactor $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR ASOCIACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }

    public function destroy(Request $request, VsrrdEntorFactor $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'ASOCIACIÓN inactivado correctamente');
    }

    public function activate(VsrrdEntorFactor $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR ASOCIACIÓN', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(Request $request, VsrrdEntorFactor $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'ASOCIACIÓN activado correctamente');
    }
}
