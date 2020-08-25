<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiJusticiaRestaurativa;
use App\Models\fichaIngreso\Logs\HFiJusticiaRestaurativa;

class FiJusticiaRestaurativaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_vinculado_violencia_id'] = $modeloxx->i_prm_vinculado_violencia_id;
        $log['i_prm_causa_vincula_vio_id'] = $modeloxx->i_prm_causa_vincula_vio_id;
        $log['i_prm_riesgo_participar_id'] = $modeloxx->i_prm_riesgo_participar_id;
        $log['i_prm_causa_riesgo_part_id'] = $modeloxx->i_prm_causa_riesgo_part_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiJusticiaRestaurativa $modeloxx)
    {
        HFiJusticiaRestaurativa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJusticiaRestaurativa "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiJusticiaRestaurativa  $modeloxx
     * @return void
     */
    public function updated(FiJusticiaRestaurativa $modeloxx)
    {
        HFiJusticiaRestaurativa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJusticiaRestaurativa "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiJusticiaRestaurativa  $modeloxx
     * @return void
     */
    public function deleted(FiJusticiaRestaurativa $modeloxx)
    {
        HFiJusticiaRestaurativa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJusticiaRestaurativa "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiJusticiaRestaurativa  $modeloxx
     * @return void
     */
    public function restored(FiJusticiaRestaurativa $modeloxx)
    {
        HFiJusticiaRestaurativa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJusticiaRestaurativa "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiJusticiaRestaurativa  $modeloxx
     * @return void
     */
    public function forceDeleted(FiJusticiaRestaurativa $modeloxx)
    {
        HFiJusticiaRestaurativa::create($this->getLog($modeloxx));
    }
}