<?php

namespace App\Http\Requests\FichaObservacion;

use App\Rules\TiempoCargueRuleTrait;
use Illuminate\Foundation\Http\FormRequest;

class FosDatosBasicoUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    public function __construct()
    {
        
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        $this->_mensaje = [
            'sis_depen_id.required' => 'Seleccione la UPI/Dependencia',
            'd_fecha_diligencia.required' => 'Seleccione la fecha de diligenciamiento',
            'fos_stse_id.required' => 'Seleccione el sub tipo de seguimiento',
            's_observacion.required' => 'Escriba la observación',
            'sis_entidad_id.required' => 'Seleccione una entidad',
        ];
        
        return $this->_mensaje;
    }

    /**
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->_reglasx = [
            'sis_depen_id' => ['Required'],
            'd_fecha_diligencia' => ['Required',new TiempoCargueRuleTrait(['estoyenx'=>1])],
            'fos_stse_id' => ['Required'],
            's_observacion' => ['Required'],
            'sis_entidad_id'=> ['Required'],
        ];
        return $this->_reglasx;
    }
}
