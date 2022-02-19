<?php

namespace App\Models\Acciones\Grupales\Asistencias\Diaria;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsdDiaria extends Model
{
    use SoftDeletes;

    protected $fillable = [
        // Todo: Colocar los campos
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    //protected $table = 'asd_diarias';

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}