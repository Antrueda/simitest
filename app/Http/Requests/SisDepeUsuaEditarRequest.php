<?php

namespace app\Http\Requests;

use app\Rules\DepenUsuarioRule;
use Illuminate\Foundation\Http\FormRequest;

class SisDepeUsuaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'user_id.required' => 'Seleccione un usuario',
            'sis_depen_id.required' => 'Seleccione una dependencia',
            'i_prm_responsable_id.required' => 'Indique si es responsable o no',
            'sis_esta_id.required' => 'Seleccione un estado',
        ];
        $this->_reglasx = [
            'user_id' => ['required'],
            'i_prm_responsable_id' => ['required'],
            'sis_depen_id' => ['required'],
            'sis_esta_id' => ['required'],
        ];
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
        return $this->_mensaje;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->_reglasx['sis_depen_id'][1]= new DepenUsuarioRule($this);

        return $this->_reglasx;
    }


}
