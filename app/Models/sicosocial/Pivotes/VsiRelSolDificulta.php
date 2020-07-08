<?php

namespace App\Models\sicosocial\Pivotes;
use Illuminate\Database\Eloquent\Model;

class VsiRelSolDificulta extends Model
{
    public $timestamps = false;
    protected $table = 'vsi_relsol_dificulta';

    protected $fillable = [
        'parametro_id',
        'vsi_relsocial_id',
        'user_crea_id',
        'user_edita_id',
    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];
}
