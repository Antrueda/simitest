<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\Sistema\SisDocfuen;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisMunicipio;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NnajDocu extends Model
{
    protected $fillable = [
        's_documento',
        'fi_datos_basico_id',
        'prm_ayuda_id',
        'prm_tipodocu_id',
        'prm_doc_fisico_id',
        'sis_municipio_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'sis_docfuen_id',
    ];
    public function fi_datos_basico()
    {
        return $this->belongsTo(FiDatosBasico::class);
    }


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
        return $this->belongsTo(SisEsta::class, 'user_edita_id');
    }
    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = NnajDocu::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**registrar informacion del nnaj para datos basicos y documento de identidad cuando se crea la composcion familiar */
    public static function setDBComposicionFamiliar($dataxxxx, $padrexxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $padrexxx) {
            $objetoxx = NnajDocu::where('s_documento', $dataxxxx['s_documento'])->first();
            if (isset($objetoxx->id) || $padrexxx != '') {
                $padrexxx=($padrexxx)!=''?$padrexxx->sis_nnaj->fi_datos_basico:$objetoxx->fi_datos_basico;
                $objetoxx=(isset($objetoxx->id))==true?$objetoxx:$padrexxx->sis_nnaj->fi_datos_basico->nnaj_docu;
                FiDatosBasico::getDbcomfamiliar($dataxxxx, $padrexxx); // actualizar datos basicos del componente familiar
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['prm_tipoblaci_id'] = 1269;
                $dataxxxx['prm_estrateg_id'] = 1269;
                $dataxxxx['sis_docfuen_id'] = 2;
                $dataxxxx['sis_esta_id'] = 1;
                $dataxxxx['prm_ayuda_id'] = 1269;
                $dataxxxx['prm_doc_fisico_id'] = 1269;
                $datosbas = FiDatosBasico::getDbcomfamiliar($dataxxxx, '');
                $dataxxxx['fi_datos_basico_id'] = $datosbas->id;
                $objetoxx = NnajDocu::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }


    public function tipoDocumento()
    {
        return $this->belongsTo(Parametro::class, 'prm_tipodocu_id');
    }
    public function docAyuda()
    {
        return $this->belongsTo(Parametro::class, 'prm_ayuda_id');
    }

    public function docFisico()
    {
        return $this->belongsTo(Parametro::class, 'prm_doc_fisico_id');
    }
    public function sis_municipio()
    {
        return $this->belongsTo(SisMunicipio::class);
    }
    public function sis_docfuen()
    {
        return $this->belongsTo(SisDocfuen::class);
    }
}
