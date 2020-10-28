<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdCompfamiObservacionEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'observaciones.required'=>'Ingrese el priemer apellido',
            ];
        $this->_reglasx = [
            'observaciones'   => 'required|string|max:4000',
         
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
        $this->validar();
        return $this->_reglasx;    }

        public function validar()
        {

        }
}