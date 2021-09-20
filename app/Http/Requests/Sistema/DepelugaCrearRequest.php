<?php

namespace app\Http\Requests\Sistema;

use Illuminate\Foundation\Http\FormRequest;

class DepelugaCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            // 'name.required' => 'Ingrese el nombre del rol',
            // 'name.unique' => 'el rol ya se encuentra en uso',
        ];
        $this->_reglasx = [
            'name' =>
            [
                // 'required', //y todos las validaciones a que haya lugar separadas por coma
                // 'unique:roles,name,'
            ],
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
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
