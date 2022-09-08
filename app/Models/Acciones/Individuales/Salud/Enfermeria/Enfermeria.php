<?php

namespace App\Models\Acciones\Individuales\Salud\Enfermeria\Enfermeria;


use App\Models\AdmiActiAsd\AsdActividad;
use App\Models\Parametro;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepartam;
use App\Models\User;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisLocalupz;
use App\Models\sistema\SisMunicipio;
use App\Models\sistema\SisServicio;
use App\Models\sistema\SisUpz;
use App\Models\sistema\SisUpzbarri;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enfermeria extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'sis_nnaj_id',
        'sis_depen_id',
        'fecha',
        'sintoma',
        'prm_motivoat_id',
        'prm_tipoaten_id',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',   
    ];



    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    

    public function funcionario()
    {
        return $this->belongsTo(User::class, 'user_fun_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }




}