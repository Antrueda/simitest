<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiDatosBasicoUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_poblacion_id.required' => 'Seleccione el tipo de población',
            // 's_segundo_nombre.required' => 'Ingrese el primer nombre',
            's_primer_nombre.required' => 'Ingrese el primer nombre',
            's_primer_apellido.required' => 'Ingrese primer apellido',
            // 's_segundo_apellido.required' => 'Ingrese el segundo apellido',
            'prm_sexo_id.required' => 'Seleccione el sexo',
            // 's_apodo.required' => 'Ingrese el apodo',
            'prm_doc_fisico_id.required' => 'Seleccione si cuenta con el documento físico',
            'd_nacimiento.required' => 'Seleccione la fecha de nacimiento',
            'sis_municipio_id.required' => 'Seleccione un municipio',
            'sis_municipioexp_id.required' => 'Seleccione un municipio de expdición',
            'prm_gsanguino_id.required' => 'Seleccione el grupo sanguíneo',
            'prm_factor_rh_id.required' => 'Seleccione el factor RH',
            'prm_estado_civil_id.required' => 'Seleccione un estado civil',
            'prm_situacion_militar_id.required' => 'Indique si tiene la situación militar definida',
            'prm_clase_libreta_id.required' => 'Indique la clase de la libreta militar',
            //'s_nombre_identitario.required' => 'Indique el nombre identitario',
            'prm_identidad_genero_id.required' => 'Seleccione una identidad de género',
            'prm_orientacion_sexual_id.required' => 'Seleccione una orientación sexual',
            'prm_etnia_id.required' => 'Seleccione una etnia',
            'prm_vestimenta_id.required' => 'Indique el estado de la vestimenta',
            's_nombre_focalizacion.required' => 'Indique el nombre de la focalización',
            's_lugar_focalizacion.required' => 'Indique el lugar de focalización',
            'sis_barrio_id.required' => 'Seleccione un barrio',
            's_documento.required' => 'Ingrese un documento de identificación',
            's_documento.unique' => 'El docuemento ya existe',
            // 
        ];
        $this->_reglasx = [
            'prm_poblacion_id' => ['required'],
            'prm_doc_fisico_id' => ['required'],
            //'s_segundo_nombre' => ['required'],
            's_primer_nombre' => ['required'],
            's_primer_apellido' => ['required'],
            //'s_segundo_apellido' => ['required'],
            'prm_sexo_id' => ['required'],
            //'s_apodo' => ['required'],
            'd_nacimiento' => ['required'],
            'sis_municipio_id' => ['required'],
            'sis_municipioexp_id' => ['required'],
            'prm_gsanguino_id' => ['required'],
            'prm_factor_rh_id' => ['required'],
            'prm_estado_civil_id' => ['required'],
            'prm_situacion_militar_id' => ['required'],
            'prm_clase_libreta_id' => ['required'],
            //'s_nombre_identitario' => ['required'],
            'prm_identidad_genero_id' => ['required'],
            'prm_orientacion_sexual_id' => ['required'],
            'prm_etnia_id' => ['required'],
            'prm_vestimenta_id' => ['required'],
            's_nombre_focalizacion' => ['required'],
            's_lugar_focalizacion' => ['required'],
            'sis_barrio_id' => ['required'],

            // 
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

$this->_reglasx['s_documento'] = 'required';
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        //dd( $this->segments());
        if ($dataxxxx['prm_etnia_id'] == 157) {
            $this->_mensaje['prm_poblacion_etnia_id.required'] = 'Seleccione porqué no tiene Sisben';
            $this->_reglasx['prm_poblacion_etnia_id'] = 'required';
        }
        $unicoxx1 = FiDatosBasico::whereNotIn('sis_nnaj_id', [$dataxxxx['sis_nnaj_id']])->where('activo', 1)->first();
        $unicoxx0 = FiDatosBasico::whereNotIn('sis_nnaj_id', [$dataxxxx['sis_nnaj_id']])->where('activo', 0)->first();
        if (isset($unicoxx1->id) and isset($unicoxx0->id)){
            $this->_reglasx['s_documento'] = [ 'unique:fi_datos_basicos'];
        }
        if ($dataxxxx['prm_doc_fisico_id'] == 228){
            $this->_mensaje['i_prm_ayuda_id.required'] ='Seleccione porqué no tiene documento';
            $this->_reglasx['i_prm_ayuda_id']='required';
        }
    }
}
