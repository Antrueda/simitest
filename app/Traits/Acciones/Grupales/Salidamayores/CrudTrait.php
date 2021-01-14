<?php

namespace App\Traits\Acciones\Grupales\Salidamayores;

use App\Helpers\Archivos\Archivos;
use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CrudTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setAgSalidaMayores($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AiSalidaMayores::create($dataxxxx['requestx']->all());
            }
            
            $dataxxxx['modeloxx']->razones()->detach();
            if($dataxxxx['requestx']->razones){
              foreach ( $dataxxxx['requestx']->razones as $d) {
                    $dataxxxx['modeloxx']->razones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
