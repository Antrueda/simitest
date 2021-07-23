<?php

namespace App\Models\Actaencu;

use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Parametro;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisServicio;
use App\Models\sistema\SisUpz;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AeEncuentro extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'sis_depen_id',
        'sis_servicio_id',
        'sis_localidad_id',
        'sis_upz_id',
        'fechdili',
        'sis_barrio_id',
        'prm_accion_id',
        'prm_actividad_id',
        'user_contdili_id',
        'user_funcontr_id',
        'respoupi_id',
        'objetivo',
        'desarrollo_actividad',
        'metodologia',
        'observaciones', 'sis_esta_id', 'user_crea_id', 'user_edita_id'
    ];
    protected $table = 'ae_encuentros';

    public function ag_recurso_id()
    {
        return $this->belongsToMany(AgRecurso::class);
    }

    public function contactos()
    {
        return $this->hasMany(AeContacto::class, 'ae_encuentro_id');
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sisDepen()
    {
        return $this->belongsTo(SisDepen::class, 'sis_depen_id');
    }

    public function sisServicio()
    {
        return $this->belongsTo(SisServicio::class, 'sis_servicio_id');
    }

    public function sisLocalidad()
    {
        return $this->belongsTo(SisLocalidad::class, 'sis_localidad_id');
    }

    public function sisUpz()
    {
        return $this->belongsTo(SisUpz::class, 'sis_upz_id');
    }

    public function sisBarrio()
    {
        return $this->belongsTo(SisBarrio::class, 'sis_barrio_id');
    }

    public function prmAccion()
    {
        return $this->belongsTo(Parametro::class, 'prm_accion_id');
    }

    public function prmActividad()
    {
        return $this->belongsTo(Parametro::class, 'prm_actividad_id');
    }

    public function getVerCrearAttribute()
    {
        $countreg = $this->contactos->count();
        return $countreg > 9 ? false : true;
    }
}