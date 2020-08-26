<?php

namespace app\Models\sicosocial\Pivotes;

use Illuminate\Database\Eloquent\Model;

class VsiNnajEmocional extends Model
{


    protected $table = 'vsi_nnaj_emocional';

    protected $fillable = [
        'parametro_id',
        'vsi_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}
