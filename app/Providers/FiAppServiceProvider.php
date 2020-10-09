<?php

use App\Models\fichaIngreso\FiAccione;
use App\Models\fichaIngreso\FiActividadestl;
use App\Models\fichaIngreso\FiActividadTiempoLibre;
use App\Models\fichaIngreso\FiAutorizacion;
use App\Models\fichaIngreso\FiBienvenida;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiCondicionAmbiente;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiContacto;
use App\Models\fichaIngreso\FiContviol;
use App\Models\fichaIngreso\FiCsdvsi;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiDiasGeneraIngreso;
use App\Models\fichaIngreso\FiDiligenc;
use App\Models\fichaIngreso\FiDiscausa;
use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Models\fichaIngreso\FiEnfermedadesFamilia;
use App\Models\fichaIngreso\FiEventosMedico;
use App\Models\fichaIngreso\FiFormacion;
use App\Models\fichaIngreso\FiGeneracionIngreso;
use App\Models\fichaIngreso\FiJrFamiliar;
use App\Models\fichaIngreso\FiJrCausassi;
use App\Models\fichaIngreso\FiJrCausamo;
use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiLesicome;
use App\Models\fichaIngreso\FiModalidad;
use App\Models\fichaIngreso\FiMotivoVinculacion;
use App\Models\fichaIngreso\FiProcesoFamilia;
use App\Models\fichaIngreso\FiProcesoPard;
use App\Models\fichaIngreso\FiProcesoSpoa;
use App\Models\fichaIngreso\FiProcesoSrpa;
use App\Models\fichaIngreso\FiRazonContinua;
use App\Models\fichaIngreso\FiRazone;
use App\Models\fichaIngreso\FiRazonIniciado;
use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use App\Models\fichaIngreso\FiRedesApoyo;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\fichaIngreso\FiRiesgoEscnna;
use App\Models\fichaIngreso\FiSacramento;
use App\Models\fichaIngreso\FiSalud;
use App\Models\fichaIngreso\FiSituacionEspecial;
use App\Models\fichaIngreso\FiSituacionVulneracion;
use App\Models\fichaIngreso\FiSustanciaConsumida;
use App\Models\fichaIngreso\FiVestuarioNnaj;
use App\Models\fichaIngreso\FiVictataq;
use App\Models\fichaIngreso\FiVictimaEscnna;
use App\Models\fichaIngreso\FiViolbasa;
use App\Models\fichaIngreso\FiViolencia;
use App\Models\fichaIngreso\NnajDese;

use App\Observers\FiAccioneObserver;
use App\Observers\FiActividadestlObserver;
use App\Observers\FiActividadTiempoLibreObserver;
use App\Observers\FiAutorizacionObserver;
use App\Observers\FiBienvenidaObserver;
use App\Observers\FiCompfamiObserver;
use App\Observers\FiCondicionAmbienteObserver;
use App\Observers\FiConsumoSpaObserver;
use App\Observers\FiContactoObserver;
use App\Observers\FiContviolObserver;
use App\Observers\FiCsdvsiObserver;
use App\Observers\FiDatosBasicoObserver;
use App\Observers\FiDiasGeneraIngresoObserver;
use App\Observers\FiDiligencObserver;
use App\Observers\FiDiscausaObserver;
use App\Observers\FiDocumentosAnexaObserver;
use App\Observers\FiEnfermedadesFamiliaObserver;
use App\Observers\FiEventosMedicoObserver;
use App\Observers\FiFormacionObserver;
use App\Observers\FiGeneracionIngresoObserver;
use App\Observers\FiJrFamiliarObserver;
use App\Observers\FiJrCausasiObserver;
use App\Observers\FiJrCausamoObserver;
use App\Observers\FiJustrestObserver;
use App\Observers\FiLesicomeObserver;
use App\Observers\FiModalidadObserver;
use App\Observers\FiMotivoVinculacionObserver;
use App\Observers\FiProcesoFamiliaObserver;
use App\Observers\FiProcesoPardObserver;
use App\Observers\FiProcesoSpoaObserver;
use App\Observers\FiProcesoSrpaObserver;
use App\Observers\FiRazonContinuaObserver;
use App\Observers\FiRazoneObserver;
use App\Observers\FiRazonIniciadoObserver;
use App\Observers\FiRedApoyoActualObserver;
use App\Observers\FiRedApoyoAntecedenteObserver;
use App\Observers\FiRedesApoyoObserver;
use App\Observers\FiResidenciaObserver;
use App\Observers\FiRiesgoEscnnaObserver;
use App\Observers\FiSacramentoObserver;
use App\Observers\FiSaludObserver;
use App\Observers\FiSituacionEspecialObserver;
use App\Observers\FiSituacionVulneracionObserver;
use App\Observers\FiSustanciaConsumidaObserver;
use App\Observers\FiVestuarioNnajObserver;
use App\Observers\FiVictataqObserver;
use App\Observers\FiVictimaEscnnaObserver;
use App\Observers\FiViolbasaObserver;
use App\Observers\FiViolenciaObserver;
use App\Observers\NnajDeseObserver;

// FICHA INGRESO
FiActividadestl::observe(FiActividadestlObserver::class);
FiActividadTiempoLibre::observe(FiActividadTiempoLibreObserver::class);
FiAutorizacion::observe(FiAutorizacionObserver::class);
FiBienvenida::observe(FiBienvenidaObserver::class);
FiCompfami::observe(FiCompfamiObserver::class);
FiCondicionAmbiente::observe(FiCondicionAmbienteObserver::class);
FiConsumoSpa::observe(FiConsumoSpaObserver::class);
FiContacto::observe(FiContactoObserver::class);
FiDatosBasico::observe(FiDatosBasicoObserver::class);
FiDiasGeneraIngreso::observe(FiDiasGeneraIngresoObserver::class);
FiDocumentosAnexa::observe(FiDocumentosAnexaObserver::class);
FiEnfermedadesFamilia::observe(FiEnfermedadesFamiliaObserver::class);
FiEventosMedico::observe(FiEventosMedicoObserver::class);
FiFormacion::observe(FiFormacionObserver::class);
FiGeneracionIngreso::observe(FiGeneracionIngresoObserver::class);
FiJrFamiliar::observe(FiJrFamiliarObserver::class);
//FiJrCausassi::observe(FiJrCausasiObserver::class);
//FiJrCausamo::observe(FiJrCausamoObserver::class);
FiJustrest::observe(FiJustrestObserver::class);
FiModalidad::observe(FiModalidadObserver::class);
FiMotivoVinculacion::observe(FiMotivoVinculacionObserver::class);
FiProcesoFamilia::observe(FiProcesoFamiliaObserver::class);
FiProcesoPard::observe(FiProcesoPardObserver::class);
FiProcesoSpoa::observe(FiProcesoSpoaObserver::class);
FiProcesoSrpa::observe(FiProcesoSrpaObserver::class);
FiRazonContinua::observe(FiRazonContinuaObserver::class);
FiRazone::observe(FiRazoneObserver::class);
FiRazonIniciado::observe(FiRazonIniciadoObserver::class);
FiRedApoyoActual::observe(FiRedApoyoActualObserver::class);
FiRedApoyoAntecedente::observe(FiRedApoyoAntecedenteObserver::class);

FiResidencia::observe(FiResidenciaObserver::class);
FiRiesgoEscnna::observe(FiRiesgoEscnnaObserver::class);
FiSacramento::observe(FiSacramentoObserver::class);
FiSalud::observe(FiSaludObserver::class);
FiSituacionEspecial::observe(FiSituacionEspecialObserver::class);
FiSituacionVulneracion::observe(FiSituacionVulneracionObserver::class);
FiSustanciaConsumida::observe(FiSustanciaConsumidaObserver::class);
FiVestuarioNnaj::observe(FiVestuarioNnajObserver::class);
FiVictimaEscnna::observe(FiVictimaEscnnaObserver::class);
FiViolencia::observe(FiViolenciaObserver::class);
FiViolbasa::observe(FiViolbasaObserver::class);
FiLesicome::observe(FiLesicomeObserver::class);
FiDiscausa::observe(FiDiscausaObserver::class);
FiVictataq::observe(FiVictataqObserver::class);
FiAccione::observe(FiAccioneObserver::class);
FiContviol::observe(FiContviolObserver::class);
NnajDese::observe(NnajDeseObserver::class);
FiDiligenc::observe(FiDiligencObserver::class);
FiCsdvsi::observe(FiCsdvsiObserver::class);
