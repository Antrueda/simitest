<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temacombo extends Model
{
    protected $fillable = ['nombre','tema_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    public function parametros()
    {
        return $this->belongsToMany(Parametro::class)->withPivot(['simianti_id','sis_esta_id', 'user_crea_id', 'user_edita_id']);
    }
}