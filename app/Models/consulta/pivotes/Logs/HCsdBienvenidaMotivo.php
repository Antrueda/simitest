<?php

namespace app\Models\consulta\pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdBienvenidaMotivo extends Model
{
    protected $fillable = [
        'parametro_id',
        'csd_bienvenida_id',
        'user_crea_id',
        'user_edita_id',
        'prm_tipofuen_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}