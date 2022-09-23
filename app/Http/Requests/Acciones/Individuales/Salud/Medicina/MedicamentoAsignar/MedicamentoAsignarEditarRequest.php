<?php

namespace App\Http\Requests\Acciones\Individuales\Salud\Medicina\MedicamentoAsignar;


use Illuminate\Foundation\Http\FormRequest;

class MedicamentoAsignarEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            
            'sis_esta_id.required'          => 'Debe seleccionar el estado de la categoria.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion de la categoria.',
        ];
        $this->_reglasx = [
          
            'estusuarios_id'       => ['required', 'integer', 'exists:estusuarios,id'],
            'sis_esta_id'          => ['required', 'integer', 'exists:sis_estas,id'],
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
        return $this->_reglasx;
    }

    public function validar()
    {
        // $this->_reglasx['nombre'][3]='unique:temas,nombre,'.$this->segments()[3];
    }
}