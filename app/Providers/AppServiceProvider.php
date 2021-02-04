<?php

namespace App\Providers;

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgContexto;
use App\Models\Acciones\Grupales\AgConvenio;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\AgSubtema;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTallerAgTema;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Acciones\Individuales\AiRetornoSalida;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\AiSalidaMenores;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdAlimentacion;
use App\Models\consulta\CsdBienvenida;
use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdComfamob;
use App\Models\consulta\CsdConclusione;
use App\Models\consulta\CsdDatosBasico;
use App\Models\consulta\CsdDinFamiliar;
use App\Models\consulta\CsdDinfamMadre;
use App\Models\consulta\CsdDinfamPadre;
use App\Models\consulta\CsdGeningAporta;
use App\Models\consulta\CsdGenIngreso;
use App\Models\consulta\CsdJusticia;
use App\Models\consulta\CsdRedsocActual;
use App\Models\consulta\CsdRedsocPasado;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\CsdViolencia;
use App\Models\consulta\pivotes\CsdAlimentCompra;
use App\Models\consulta\pivotes\CsdAlimentFrec;
use App\Models\consulta\pivotes\CsdAlimentInge;
use App\Models\consulta\pivotes\CsdAlimentPrepara;
use App\Models\consulta\pivotes\CsdBienvenidaMotivo;
use App\Models\consulta\pivotes\CsdDinfamAntecedente;
use App\Models\consulta\pivotes\CsdDinfamEstablecen;
use App\Models\consulta\pivotes\CsdDinfamIncumple;
use App\Models\consulta\pivotes\CsdDinfamProblema;
use App\Models\consulta\pivotes\CsdNnajEspecial;
use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use App\Models\intervencion\IsDatosBasico;
use App\Models\intervencion\IsProximaAreaAjuste;


use App\Models\Post;


use App\Models\Sistema\AreaUser;
use App\Models\Sistema\ParametroTema;
use App\Models\Sistema\SisActividad;
use App\Models\Sistema\SisActividadProceso;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisCargo;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDepeServ;
use App\Models\Sistema\SisDepeUsua;
use App\Models\Sistema\SisDiaFestivo;
use App\Models\Sistema\SisDiagnosticos;
// use App\Models\Sistema\SisDocumentoFuente;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEntidadSalud;
use App\Models\Sistema\SisEslug;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisFsoporte;
use App\Models\Sistema\SisInstitucionEdu;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisLocalupz;
use App\Models\Sistema\SisMapaProc;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisObse;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisProceso;
use App\Models\Sistema\SisServicio;
use App\Models\Sistema\SisTabla;
use App\Models\Sistema\SisTcampo;
use App\Models\Sistema\SisTitulo;
use App\Models\Sistema\SisUpz;
use App\Models\Sistema\SisUpzbarri;
use App\Models\Tema;
use App\Models\User;
use App\Models\Usuario\SisAreaUsua;
use App\Models\Salud\Mitigacion\Vspa;
use App\Models\Salud\Mitigacion\VspaTabla;
use App\Models\Salud\Mitigacion\VspaTablaCuatro;
use App\Models\Salud\Mitigacion\VspaTablaDos;
use App\Models\Salud\Mitigacion\VspaTablaTres;
use App\Models\Salud\Mitigacion\Vma\MitVma;
use App\Models\Indicadores\Area;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocIndi;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InLigru;
use App\Models\Indicadores\InLineaBase;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Indicadores\InPregunta;
use App\Models\Indicadores\InRespu;
use App\Models\Indicadores\InValidacion;
use App\Models\Indicadores\InValoracion;
use App\Models\Sistema\SisDocfuen;
use App\Models\Sistema\SisEnprsa;
use App\Observers\AreaObserver;
use App\Observers\AgActividadObserver;
use App\Observers\AgAsistenteObserver;
use App\Observers\AgContextoObserver;
use App\Observers\AgConvenioObserver;
use App\Observers\AgRecursoObserver;
use App\Observers\AgRelacionObserver;
use App\Observers\AgResponsableObserver;
use App\Observers\AgSubtemaObserver;
use App\Observers\AgTallerAgTemaObserver;
use App\Observers\AgTallerObserver;
use App\Observers\AgTemaObserver;
use App\Observers\AiReporteEvasionObserver;
use App\Observers\AiRetornoSalidaObserver;
use App\Observers\AiSalidaMayoresObserver;
use App\Observers\AiSalidaMenoresObserver;
use App\Observers\AreaUserObserver;
use App\Observers\CsdAlimentacionObserver;
use App\Observers\CsdAlimentCompraObserver;
use App\Observers\CsdAlimentFrecObserver;
use App\Observers\CsdAlimentIngeObserver;
use App\Observers\CsdAlimentPreparaObserver;
use App\Observers\CsdBienvenidaMotivosObserver;
use App\Observers\CsdBienvenidaObserver;
use App\Observers\CsdComfamobObserver;
use App\Observers\CsdComFamiliarObserver;
use App\Observers\CsdConclusionesObserver;
use App\Observers\CsdDatosBasicoObserver;
use App\Observers\CsdDinfamAntecedenteObserver;
use App\Observers\CsdDinfamEstablecenObserver;
use App\Observers\CsdDinFamiliarObserver;
use App\Observers\CsdDinfamIncumpleObserver;
use App\Observers\CsdDinfamMadreObserver;
use App\Observers\CsdDinfamPadreObserver;
use App\Observers\CsdDinfamProblemaObserver;
use App\Observers\CsdGeningAportaObserver;
use App\Observers\CsdGenIngresoObserver;
use App\Observers\CsdJusticiaObserver;
use App\Observers\CsdNnajEspecialObserver;
use App\Observers\CsdObserver;
use App\Observers\CsdRedSocActualObserver;
use App\Observers\CsdRedSocPasadoObserver;
use App\Observers\CsdResideambienteObserver;
use App\Observers\CsdResidenciaObserver;
use App\Observers\CsdSisNnajObserver;
use App\Observers\CsdViolenciaObserver;

use App\Observers\FosDatosBasicoObserver;
use App\Observers\FosStseObserver;
use App\Observers\FosTseObserver;
use App\Observers\InAccionGestionObserver;
use App\Observers\IsDatosBasicoObserver;
use App\Observers\InActsoporteObserver;
use App\Observers\InBaseFuenteObserver;
use App\Observers\InDocPreguntaObserver;
use App\Observers\InFuenteObserver;
use App\Observers\InIndicadorObserver;
use App\Observers\InLigruObserver;
use App\Observers\InLineaBaseObserver;
use App\Observers\InLineabaseNnajObserver;
use App\Observers\InPreguntaObserver;
use App\Observers\InRespuObserver;
use App\Observers\InValidacionObserver;


use App\Observers\ParametroObserver;
use App\Observers\ParametroTemaObserver;
use App\Observers\PostObserver;
use App\Observers\RoleextObserver;
use App\Observers\RolUsuarioObserver;
use App\Observers\SisActividadObserver;
use App\Observers\SisActividadProcesoObserver;
use App\Observers\SisAreaUsuaObserver;
use App\Observers\SisBarrioObserver;
use App\Observers\SisCargoObserver;
use App\Observers\SisDepartamObserver;
use App\Observers\SisDepenObserver;
use App\Observers\SisDepeServObserver;
use App\Observers\SisDepeUsuaObserver;
use App\Observers\SisDiaFestivoObserver;
use App\Observers\SisDiagnosticosObserver;
use App\Observers\SisDocumentoFuenteObserver;
use App\Observers\SisEntidadObserver;
use App\Observers\SisEntidadSaludObserver;
use App\Observers\SisEslugObserver;
use App\Observers\SisEstaObserver;
use App\Observers\SisFsoporteObserver;
use App\Observers\SisInstitucionEduObserver;
use App\Observers\SisLocalidadObserver;
use App\Observers\SisLocalupzObserver;
use App\Observers\SisMapaProcObserver;
use App\Observers\SisMunicipioObserver;
use App\Observers\SisNnajObserver;
use App\Observers\SisObseObserver;
use App\Observers\SisPaiObserver;
use App\Observers\SisProcesoObserver;
use App\Observers\TemaObserver;
use App\Observers\UserObserver;
use App\Observers\SisServicioObserver;
use App\Observers\SisTablaObserver;
use App\Observers\SisTcampoObserver;
use App\Observers\SisTituloObserver;
use App\Observers\SisUpzObserver;
use App\Observers\SisUpzbarriObserver;
use App\Observers\VspaObserver;
use App\Observers\VspaTablaObserver;
use App\Observers\VspaTablaCuatroObserver;
use App\Observers\VspaTablaDosObserver;
use App\Observers\VspaTablaTresObserver;
use App\Observers\MitVmaObserver;
use App\Observers\InValoracionObserver;
use App\Observers\InDocIndiObserver;
use App\Observers\SisEnprsaObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(190);
        // SICOSOCIAL
        require_once('ValoracionAppServiceProvider.php');
        // ACCIONES GRUPALES
        AgActividad::observe(AgActividadObserver::class);
        AgAsistente::observe(AgAsistenteObserver::class);
        AgContexto::observe(AgContextoObserver::class);
        AgConvenio::observe(AgConvenioObserver::class);
        AgRecurso::observe(AgRecursoObserver::class);
        AgRelacion::observe(AgRelacionObserver::class);
        AgResponsable::observe(AgResponsableObserver::class);
        AgSubtema::observe(AgSubtemaObserver::class);
        AgTaller::observe(AgTallerObserver::class);
        AgTallerAgTema::observe(AgTallerAgTemaObserver::class);
        AgTema::observe(AgTemaObserver::class);

        // ACCIONES INDIVIDUALES
        AiReporteEvasion::observe(AiReporteEvasionObserver::class);
        AiRetornoSalida::observe(AiRetornoSalidaObserver::class);
        AiSalidaMayores::observe(AiSalidaMayoresObserver::class);
        AiSalidaMenores::observe(AiSalidaMenoresObserver::class);

        // CONSULTA
        Csd::observe(CsdObserver::class);
        CsdAlimentacion::observe(CsdAlimentacionObserver::class);
        CsdBienvenida::observe(csdBienvenidaObserver::class);
        CsdComFamiliar::observe(CsdComFamiliarObserver::class);
        CsdComfamob::observe(CsdComfamobObserver::class);
        CsdConclusione::observe(CsdConclusionesObserver::class);
        CsdDatosBasico::observe(CsdDatosBasicoObserver::class);
        CsdDinFamiliar::observe(CsdDinFamiliarObserver::class);
        CsdDinfamMadre::observe(CsdDinfamMadreObserver::class);
        CsdDinfamPadre::observe(CsdDinfamPadreObserver::class);
        CsdGeningAporta::observe(CsdGeningAportaObserver::class);
        CsdGenIngreso::observe(CsdGenIngresoObserver::class);
        CsdJusticia::observe(CsdJusticiaObserver::class);
        CsdRedsocActual::observe(CsdRedSocActualObserver::class);
        CsdRedsocPasado::observe(CsdRedSocPasadoObserver::class);
        CsdResidencia::observe(CsdResidenciaObserver::class);
        CsdViolencia::observe(CsdViolenciaObserver::class);

        // CONSULTA - PIVOTES
        CsdAlimentCompra::observe(CsdAlimentCompraObserver::class);
        CsdAlimentFrec::observe(CsdAlimentFrecObserver::class);
        CsdAlimentInge::observe(CsdAlimentIngeObserver::class);
        CsdAlimentPrepara::observe(CsdAlimentPreparaObserver::class);
        CsdBienvenidaMotivo::observe(CsdBienvenidaMotivosObserver::class);
        CsdDinfamAntecedente::observe(CsdDinfamAntecedenteObserver::class);
        CsdDinfamEstablecen::observe(CsdDinfamEstablecenObserver::class);
        CsdDinfamIncumple::observe(CsdDinfamIncumpleObserver::class);
        CsdDinfamProblema::observe(CsdDinfamProblemaObserver::class);
        CsdNnajEspecial::observe(CsdNnajEspecialObserver::class);
        CsdResideambiente::observe(CsdResideambienteObserver::class);
        CsdSisNnaj::observe(CsdSisNnajObserver::class);

        // INTERVENCION
        IsDatosBasico::observe(IsDatosBasicoObserver::class);


        // FICHA OBSERVACION
        FosDatosBasico::observe(FosDatosBasicoObserver::class);
        FosStse::observe(FosStseObserver::class);
        FosTse::observe(FosTseObserver::class);

        // FICHA INGRESO
        require_once('FiAppServiceProvider.php');
        // USUARIO
        SisAreaUsua::observe(SisAreaUsuaObserver::class);

        // CARPETA RAIZ
        // Parametro::observe(ParametroObserver::class);

        Post::observe(PostObserver::class);

        Tema::observe(TemaObserver::class);
        User::observe(UserObserver::class);

        // SISTEMA
        AreaUser::observe(AreaUserObserver::class);
        ParametroTema::observe(ParametroTemaObserver::class);
        SisActividad::observe(SisActividadObserver::class);
        SisActividadProceso::observe(SisActividadProcesoObserver::class);
        SisBarrio::observe(SisBarrioObserver::class);
        SisCargo::observe(SisCargoObserver::class);
        SisDepartam::observe(SisDepartamObserver::class);
        SisDepen::observe(SisDepenObserver::class);
        SisDepeServ::observe(SisDepeServObserver::class);
        SisDepeUsua::observe(SisDepeUsuaObserver::class);
        SisDiaFestivo::observe(SisDiaFestivoObserver::class);
        SisDiagnosticos::observe(SisDiagnosticosObserver::class);
        SisDocfuen::observe(SisDocumentoFuenteObserver::class);
        SisEntidad::observe(SisEntidadObserver::class);
        SisEnprsa::observe(SisEnprsaObserver::class);
        SisEntidadSalud::observe(SisEntidadSaludObserver::class);
        SisEslug::observe(SisEslugObserver::class);
        SisEsta::observe(SisEstaObserver::class);
        SisFsoporte::observe(SisFsoporteObserver::class);
        SisInstitucionEdu::observe(SisInstitucionEduObserver::class);
        SisLocalidad::observe(SisLocalidadObserver::class);
        SisLocalupz::observe(SisLocalupzObserver::class);
        SisMapaProc::observe(SisMapaProcObserver::class);
        SisMunicipio::observe(SisMunicipioObserver::class);
        SisNnaj::observe(SisNnajObserver::class);
        SisObse::observe(SisObseObserver::class);
        SisPai::observe(SisPaiObserver::class);
        SisProceso::observe(SisProcesoObserver::class);
        SisServicio::observe(SisServicioObserver::class);
        SisTabla::observe(SisTablaObserver::class);
        SisTcampo::observe(SisTcampoObserver::class);
        SisTitulo::observe(SisTituloObserver::class);
        SisUpz::observe(SisUpzObserver::class);
        SisUpzbarri::observe(SisUpzbarriObserver::class);

        // SALUD/MITIGACION
        Vspa::observe(VspaObserver::class);
        VspaTabla::observe(VspaTablaObserver::class);
        VspaTablaCuatro::observe(VspaTablaCuatroObserver::class);
        VspaTablaDos::observe(VspaTablaDosObserver::class);
        VspaTablaTres::observe(VspaTablaTresObserver::class);

        MitVma::observe(MitVmaObserver::class);

        // INDICADORES
        Area::observe(AreaObserver::class);
        InAccionGestion::observe(InAccionGestionObserver::class);
        InActsoporte::observe(InActsoporteObserver::class);
        InBaseFuente::observe(InBaseFuenteObserver::class);
        InDocPregunta::observe(InDocPreguntaObserver::class);
        InFuente::observe(InFuenteObserver::class);
        InIndicador::observe(InIndicadorObserver::class);
        InLigru::observe(InLigruObserver::class);
        InLineaBase::observe(InLineaBaseObserver::class);
        InLineabaseNnaj::observe(InLineabaseNnajObserver::class);
        InPregunta::observe(InPreguntaObserver::class);
        InRespu::observe(InRespuObserver::class);
        InValidacion::observe(InValidacionObserver::class);
        InValoracion::observe(InValoracionObserver::class);
        InDocIndi::observe(InDocIndiObserver::class);
    }
}
