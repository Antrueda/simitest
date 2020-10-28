<?php

namespace App\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiEstemoContexto extends Model
{
    protected $table = 'h_vsi_estemo_contexto';
    protected $fillable = [
        'parametro_id',
        'vsi_estemocional_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
