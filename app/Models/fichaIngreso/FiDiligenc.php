<?php

namespace app\Models\fichaIngreso;

use Carbon\Carbon;
use App\Models\sistema\SisEsta;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class FiDiligenc extends Model
{
    protected $fillable = [
        'diligenc',
        'fi_datos_basico_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
    ];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }

    public function fi_datos_basico()
    {
        return $this->belongsTo(FiDatosBasico::class);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'diligenc' => 'timestamp',
    ];

    public static function transaccion($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            if (isset($objetoxx->fi_diligenc->id)) {
                $modeloxx = $objetoxx->fi_diligenc->update($dataxxxx);
            } else {
                $modeloxx = FiDiligenc::create($dataxxxx);
            }
            return $modeloxx;
        }, 5);
        return $usuariox;
    }

    // public function getDiligencAttribute()
    // {
    //     return Carbon::createFromFormat('Y-m-s', $this->diligenc)->format('Y-m-d');
    // }
}
