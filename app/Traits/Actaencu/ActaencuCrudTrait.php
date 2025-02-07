<?php

namespace App\Traits\Actaencu;

use App\Models\Actaencu\AeAsisNnaj;
use App\Models\Actaencu\AeAsistencia;
use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeDirregi;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Actaencu\AeRecuadmi;
use App\Models\Actaencu\AeRecurso;
use App\Models\Actaencu\NnajAsis;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajSexo;
use App\Models\sistema\SisNnaj;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait ActaencuCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setAeEncuentro($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AeEncuentro::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['permisox'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAeContacto($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AeContacto::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['permisox'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
    /**
     * realizar el crud de la administración de los recursos del acta de encentro
     *
     * @param array $dataxxxx
     * @return void
     */
    public function setAeRecuadmi($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AeRecuadmi::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['permisox'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAeAsistencia($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $dataxxxx['modeloxx']->aeDirregis->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AeAsistencia::create($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['ae_asistencia_id' => $dataxxxx['modeloxx']->id]);
                AeDirregi::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['permisox'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAeAsisNnaj($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $dataxxxx['modeloxx']->nnaj_asis->update($dataxxxx['requestx']->all());
                $dataxxxx['modeloxx']->nnaj_sexo->update($dataxxxx['requestx']->all());
                $dataxxxx['modeloxx']->nnaj_docu->update($dataxxxx['requestx']->all());
                $dataxxxx['modeloxx']->nnaj_nacimi->update($dataxxxx['requestx']->all());
                $dataxxxx['modeloxx']->sis_nnaj->FiResidencia->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                // * Se añaden campos para crear el nnaj en el sistema.
                $dataxxxx['requestx']->request->add(['prm_escomfam_id' => 2686]);
                $dataxxxx['requestx']->request->add(['prm_nuevoreg_id' => 227]);
                $dataxxxx['requestx']->request->add(['sis_esta_id' => 1]);
                $dataxxxx['requestx']->request->add(['simianti_id' => 0]);
                $sisnnajx = SisNnaj::create($dataxxxx['requestx']->all());
                // * Se añaden datos para crear la ficha de ingreso.
                $dataxxxx['requestx']->request->add(['sis_nnaj_id' =>  $sisnnajx->id]);
                $dataxxxx['requestx']->request->add(['prm_estrateg_id' => 2686]);
                $dataxxxx['requestx']->request->add(['sis_docfuen_id' => 2]);
                $dataxxxx['modeloxx'] = FiDatosBasico::create($dataxxxx['requestx']->all());
                // * Señaden datos para registrar datos del sexo del nnaj.
                $dataxxxx['requestx']->request->add(['prm_identidad_genero_id' => 2686]);
                $dataxxxx['requestx']->request->add(['prm_orientacion_sexual_id' => 2686]);
                $dataxxxx['requestx']->request->add(['fi_datos_basico_id' => $dataxxxx['modeloxx']->id]);
                NnajSexo::create($dataxxxx['requestx']->all());
                // * Se añaden datos para registrar datos del documento del nnaj
                $dataxxxx['requestx']->request->add(['sis_municipio_id' => 1]);
                NnajDocu::create($dataxxxx['requestx']->all());
                // * Se crean datos de nacimiento del nnaj
                NnajNacimi::create($dataxxxx['requestx']->all());
                // * Se crean datos auxiliares de asistencia del nnaj
                NnajAsis::create($dataxxxx['requestx']->all());
                // * Se añaden datos para registrar la residencia del nnaj.
                $dataxxxx['requestx']->request->add(['i_prm_tiene_dormir_id' => 2686]);
                $dataxxxx['requestx']->request->add(['i_prm_tipo_duerme_id' => 2686]);
                $dataxxxx['requestx']->request->add(['i_prm_tipo_tenencia_id' => 2686]);
                $dataxxxx['requestx']->request->add(['i_prm_tipo_direccion_id' => 2686]);
                $dataxxxx['requestx']->request->add(['i_prm_estrato_id' => 2686]);
                $dataxxxx['requestx']->request->add(['i_prm_espacio_parcha_id' => 2686]);
                FiResidencia::create($dataxxxx['requestx']->all());
                // * Se añaden datos para registrar l componente familiar
                $dataxxxx['requestx']->request->add(['i_prm_parentesco_id' => 805]);
                $dataxxxx['requestx']->request->add(['i_prm_ocupacion_id' => 2686]);
                $dataxxxx['requestx']->request->add(['prm_reprlega_id' => 2686]);
                $dataxxxx['requestx']->request->add(['i_prm_vinculado_idipron_id' => 2686]);
                $dataxxxx['requestx']->request->add(['i_prm_convive_nnaj_id' => 227]);
                $dataxxxx['requestx']->request->add(['sis_nnajnnaj_id' => $sisnnajx->id]);
                FiCompfami::create($dataxxxx['requestx']->all());
                $dataxxxx['padrexxx']->sis_nnaj_id()->attach([$dataxxxx['requestx']->sis_nnaj_id => [
                    'sis_esta_id'   => 1,
                    'user_crea_id'  => Auth::id(),
                    'user_edita_id' => Auth::id()
                ]]);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['permisox'], [$dataxxxx['padrexxx']->id, $respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setNnajAsisCreate($dataxxxx)
    {
        $dataxxxx['requestx']->request->add([
            'user_edita_id' => Auth::id(),
            'user_crea_id' => Auth::id(),
            'sis_esta_id' => 1,
            'fi_datos_basico_id' => $dataxxxx['modeloxx']->id
        ]);
        NnajAsis::create($dataxxxx['requestx']->all());
    }

    public function setAeAsisNnajUpdate($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id, 'fi_datos_basico_id' => $dataxxxx['modeloxx']->id]);
            $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            if (!is_null($dataxxxx['modeloxx']->nnaj_asis)) {
                $dataxxxx['modeloxx']->nnaj_asis->update($dataxxxx['requestx']->all());
            } else {
                $this->setNnajAsisCreate($dataxxxx);
            }
            $dataxxxx['modeloxx']->nnaj_sexo->update($dataxxxx['requestx']->all());
            $dataxxxx['modeloxx']->nnaj_docu->update($dataxxxx['requestx']->all());
            $dataxxxx['modeloxx']->nnaj_nacimi->update($dataxxxx['requestx']->all());
            $dataxxxx['modeloxx']->sis_nnaj->FiResidencia->update($dataxxxx['requestx']->all());
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['permisox'], [$dataxxxx['padrexxx']->id, $respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAeRecurso($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AeRecurso::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['permisox'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
