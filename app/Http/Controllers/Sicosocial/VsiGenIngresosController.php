<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiGenIngresoCrearRequest;
use App\Http\Requests\Vsi\VsiGenIngresoEditarRequest;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class VsiGenIngresosController extends Controller
{
    use VsiTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsigener',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'GENERACION DE INGRESOS',
            'carpetax' => 'Geningreso',
            'slotxxxx' => 'vsigener',
            'tablaxxx' => 'datatable',
            'indecrea' => false, // false muestra las pestañas
            'esindexx' => false,
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',
            'conperfi' => '', // indica si la vista va a tener perfil
            'usuariox' => [],

            'confirmx' => 'Desea inactivar la vsi: ',
            'reconfir' => 'Realmente desea inactivar la vsi: ',
            'msnxxxxx' => 'No se puedo inactivar la vsi',
            'rutaxxxx' => 'vsigener',
            'routnuev' => 'vsigener',
            'routxxxx' => 'vsigener',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
       
        $this->opciones['activida'] = Tema::combo(114, TRUE, false);
        $this->opciones['informal'] = Tema::combo(115, TRUE, false);
        $this->opciones['otrosxxx'] = Tema::combo(116, TRUE, false);
        $this->opciones['ningunax'] = Tema::combo(122, false, false);
        $this->opciones['tiempoxx'] = Tema::combo(4, false, false);
        $this->opciones['ampmxxxx'] = Tema::combo(5, false, false);
        $this->opciones['semanaxx'] = Tema::combo(129, false, false);
        $this->opciones['frecuenc'] = Tema::combo(110, true, false);
        $this->opciones['laboralx'] = Tema::combo(117, true, false);
        $this->opciones['sinoxxxx'] = Tema::combo(23, false, false);
        $this->opciones['parentes'] = Tema::combo(66, false, false);

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
           
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vsi $padrexxx)
    {
      
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$padrexxx->id]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $padrexxx)
    {
       $request->request->add(['vsi_id' => $padrexxx]);
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => '',
            'menssage' => 'Registro creado con éxito'
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vsi $objetoxx)
    {


        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx->VsiGenIngreso, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {
        $this->validator($dataxxxx['requestx']->all())->validate();
        $dato = Vsi::findOrFail($dataxxxx['requestx']->vsi_id);
        if($dato->nnaj->fi_datos_basico->nnaj_nacimi->edad >= 18){
            $this->validatorMayor($dataxxxx['requestx']->all())->validate();
        }
        $registro = VsiGenIngreso::transaccion($dataxxxx);

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$registro->vsi_id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vsi $objetoxx)
    {
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx->VsiGenIngreso,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }

    protected function validator(array $data){
        return Validator::make($data, [
            
            'prm_actividad_id' => 'required|exists:parametros,id',
            'trabaja' => 'required_if:prm_actividad_id,626|max:120',
            'prm_informal_id' => 'required_if:prm_actividad_id,627',
            'prm_otra_id' => 'required_if:prm_actividad_id,628',
            'prm_no_id' => 'required_if:prm_actividad_id,853',
            'cuanto' => 'required_if:prm_no_id,711',
            'prm_periodo_id' => 'required_if:prm_actividad_id,853|required_if:prm_no_id,711',
            'jornada_entre' => 'required_unless:prm_actividad_id,853',
            'prm_jor_entre_id' => 'required_unless:prm_actividad_id,853',
            'jornada_a' => 'required_unless:prm_actividad_id,853',
            'prm_jor_a_id' => 'required_unless:prm_actividad_id,853',
            'prm_frecuencia_id' => 'required_unless:prm_actividad_id,853',
            'aporte' => 'required_unless:prm_actividad_id,853',
            'prm_laboral_id' => 'required_if:prm_actividad_id,626',
            'prm_aporta_id' => 'required_unless:prm_actividad_id,853',
            'porque' => 'required_if:prm_aporta_id,853',
            'cuanto_aporta' => 'required_if:prm_aporta_id,853',
            'expectativa' => 'nullable|string|max:4000',
            'descripcion' => 'nullable|string|max:4000',
            'dias' => 'required_unless:prm_actividad_id,853',
            'quienes' => 'nullable|array',
            'labores' => 'nullable|array',
        ]);
    }

    protected function validatorMayor(array $data){
        return Validator::make($data, [
            'expectativa' => 'required|string|max:4000',
            'descripcion' => 'required|string|max:4000',
            'quienes' => 'required|array',
            'labores' => 'required|array',
        ]);
    }
}
