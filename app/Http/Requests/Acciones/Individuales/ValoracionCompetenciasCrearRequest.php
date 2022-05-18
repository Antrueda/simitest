<?php

namespace App\Http\Requests\Acciones\Individuales;

use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ValoracionCompetenciasCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'modulo_id.required'=>'Seleccione un modulo',
            'unidad_id.required'=>'Seleccione una unidad',
            'conocimiento.required'=>'Digite un numero del 1 al 10',
            'desempeno.required'=>'Digite un numero del 1 al 10',
            'producto.required'=>'Digite un numero del 1 al 10',
            'concepto.required'=>'Ingrese la fecha de diligenciamiento',
           
           
        
            ];
        $this->_reglasx = [
            'modulo_id' => 'required',
            'unidad_id' => 'required',
            'conocimiento' => 'required',
            'desempeno' => 'required',
            'producto' => 'required',
            'concepto' => 'required',
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
     * Get the validation rules that Apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->validar();
        return $this->_reglasx;    }

        public function validar()
        {
            $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
          

            $responsa = UniComp::select('unidad_id')->where('valora_id',$this->segments(0))->first();
            //ddd($responsa);
            if (isset($responsa)) {
                $this->_mensaje['yarespon.required'] = 'La unidad de aprendizaje ya se encuentra registrada';
                $this->_reglasx['yarespon'] = 'required';
            }
          
      
        }
}



