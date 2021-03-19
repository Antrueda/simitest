<?php

namespace App\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiSitespRiesgo extends Model
{


    protected $table = 'vsi_sitesp_riesgo';

    protected $fillable = [
        'parametro_id',
        'vsi_sitespecial_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];


}
