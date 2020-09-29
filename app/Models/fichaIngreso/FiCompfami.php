<?php

namespace App\Models\fichaIngreso;

use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisPai;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiCompfami extends Model
{
    protected $fillable = [
        's_nombre_identitario',
        's_telefono',
        'd_nacimiento',
        'i_prm_parentesco_id',
        'prm_reprlega_id',
        'i_prm_ocupacion_id',
        'i_prm_vinculado_idipron_id',
        'i_prm_convive_nnaj_id',
        'sis_nnajnnaj_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function sis_nnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }

    public function sis_nnajnnaj()
    {
        return $this->belongsTo(SisNnaj::class, 'sis_nnajnnaj_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function composicion($usuariox)
    {
        $vestuari = ['composic' => FiCompfami::where('', $usuariox)->first(), 'formular' => false];

        if ($vestuari['composic'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }



    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {

            $dataxxxx['prm_tipodocu_id'] = $dataxxxx['prm_documento_id'];
            $dataxxxx['s_nombre_identitario'] = strtoupper($dataxxxx['s_nombre_identitario']);
            $dt = new DateTime($dataxxxx['d_nacimiento']);
            $dataxxxx['d_nacimiento'] = $dt->format('Y-m-d');
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $datosbas=NnajDocu::setDBComposicionFamiliar($dataxxxx,$objetoxx);
                $dataxxxx['sis_nnaj_id'] = $datosbas->fi_datos_basico->sis_nnaj_id;
                $objetoxx->update($dataxxxx);

            } else {
                $datosbas=NnajDocu::setDBComposicionFamiliar($dataxxxx,'');
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['sis_nnaj_id'] = $datosbas->fi_datos_basico->sis_nnaj_id;
                $objetoxx = FiCompfami::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }

    public static function combo($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        foreach (FiCompfami::where('sis_nnajnnaj_id', $padrexxx->sis_nnaj_id)->get() as $registro) {
            $nombrexx = $registro->sis_nnaj->fi_datos_basico->s_primer_nombre . ' ' . $registro->sis_nnaj->fi_datos_basico->s_segundo_nombre . ' ' .
                $registro->sis_nnaj->fi_datos_basico->s_primer_apellido . ' ' . $registro->sis_nnaj->fi_datos_basico->s_segundo_apellido;
            if ($ajaxxxxx) {
                $comboxxx[] = [
                    'valuexxx' => $registro->id,
                    'optionxx' =>  $nombrexx
                ];
            } else {
                $comboxxx[$registro->id] =  $nombrexx;
            }
        }
        return $comboxxx;
    }

    /**
     * Este método comprueba si existe un componte familiar mayor de edad para que sea el responsable del NNAJ
     */
    public static function getComboResponsable($padrexxx, $cabecera, $ajaxxxxx, $edadxxxx)
    {
        $redirect = true;
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        $compofam = FiCompfami::where(function ($consulta) use ($padrexxx, $edadxxxx) {
            $consulta->where('sis_nnajnnaj_id', $padrexxx->sis_nnaj_id);
            //   if($edadxxxx>=18){
            //     $consulta->where('i_prm_parentesco_id', 805);
            //   }
            return $consulta;
        })->get();
        foreach ($compofam as $registro) {
            $edad = Carbon::parse($registro->d_nacimiento)->age;
            if ($edad >= 18) {
                $nombrexx = $registro->sis_nnaj->fi_datos_basico;
                $nombrexx = $nombrexx->s_primer_nombre . ' ' . $nombrexx->s_segundo_nombre . ' ' .
                    $nombrexx->s_primer_apellido . ' ' . $nombrexx->s_segundo_apellido;
                if ($ajaxxxxx) {
                    $comboxxx[] = [
                        'valuexxx' => $registro->id,
                        'optionxx' => $nombrexx
                    ];
                } else {
                    $comboxxx[$registro->id] = $nombrexx;
                }
                $redirect = false;
            }
        }
        return [$redirect, $comboxxx];
    }
    public function sis_pai()
    {
        return $this->belongsTo(SisPai::class);
    }
    public function sis_departamento()
    {
        return $this->belongsTo(SisDepartamento::class);
    }
    public function sis_municipio()
    {
        return $this->belongsTo(SisMunicipio::class);
    }
}