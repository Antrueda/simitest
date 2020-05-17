<?php

namespace App\Models\Indicadores;

use App\Models\sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InLineabaseNnaj extends Model
{
    protected $fillable = [
    'in_fuente_id',
    'sis_nnaj_id',
    'i_prm_categoria_id',
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


  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['i_prm_categoria_id'] = 246;
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InLineabaseNnaj::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
  public function in_fuente(){
    return $this->belongsTo(InFuente::class);
  }
}

