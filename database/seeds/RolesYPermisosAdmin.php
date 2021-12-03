<?php

use Spatie\Permission\Models\Role;

Role::find(2)->givePermissionTo([
    'vsinnajs-leer',
    'vsidatbi-leer', 'vsidatbi-crear', 'vsidatbi-editar', 'vsidatbi-borrar',

    'rolesxxx-leer', 'rolesxxx-crear', 'rolesxxx-editar', 'rolesxxx-borrar',
    'permirol-leer', 'permirol-crear', 'permirol-editar', 'permirol-borrar',
    // 'grupliba-leer', 'grupliba-crear', 'grupliba-editar', 'grupliba-borrar',
    'usuario-leer', 'usuario-crear', 'usuario-editar', 'usuario-borrar',
    'siscargo-leer', 'siscargo-crear', 'siscargo-editar', 'siscargo-borrar',
    'persona-leer', 'persona-crear', 'persona-editar', 'persona-borrar',
    'parametro-leer', 'parametro-crear', 'parametro-editar', 'parametro-borrar',
    'tema-leer', 'tema-crear', 'tema-editar', 'tema-borrar',
    'acuerdo-editar',
    'dependencia-leer', 'dependencia-crear', 'dependencia-editar', 'dependencia-borrar',
    'eps-leer', 'eps-crear', 'eps-editar', 'eps-borrar',
    // 'fsoporte-leer', 'fsoporte-crear', 'fsoporte-editar', 'fsoporte-borrar',
    'documentoFuente-leer', 'documentoFuente-crear', 'documentoFuente-editar', 'documentoFuente-borrar',
    'entidad-leer', 'entidad-crear', 'entidad-editar', 'entidad-borrar',
    'actividad-leer', 'actividad-crear', 'actividad-editar', 'actividad-borrar',
    'mapaProceso-leer', 'mapaProceso-crear', 'mapaProceso-editar', 'mapaProceso-borrar',
    'proceso-leer', 'proceso-crear', 'proceso-editar', 'proceso-borrar',
    'actividadProceso-leer', 'actividadProceso-crear', 'actividadProceso-editar', 'actividadProceso-borrar',
    'vsidabas-leer', 'vsidabas-crear', 'vsidabas-editar',
    'vsibienv-leer', 'vsibienv-crear', 'vsibienv-editar',
    'vsiviole-leer', 'vsiviole-crear', 'vsiviole-editar',
    'vsieduca-leer', 'vsieduca-crear', 'vsieduca-editar',
    'fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar',
    'firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar',
    'vsisalud-leer', 'vsisalud-crear', 'vsisalud-editar',
    'vsidfpad-leer', 'vsidfpad-crear', 'vsidfpad-editar', 'vsidfpad-borrar',
    'vsidfmad-leer', 'vsidfmad-crear', 'vsidfmad-editar', 'vsidfmad-borrar',
    'agrelacion-leer', 'agrelacion-crear', 'agrelacion-editar', 'agrelacion-borrar',
    'contrase-editar',

    'vsirefam-leer', 'vsirefam-crear', 'vsirefam-editar',
    'vsirelac-leer', 'vsirelac-crear', 'vsirelac-editar',
    'vsiconsu-leer', 'vsiconsu-crear', 'vsiconsu-editar',
    'fiactividades-leer', 'fiactividades-crear', 'fiactividades-editar', 'fiactividades-borrar',
    'fibienvenida-leer', 'fibienvenida-crear', 'fibienvenida-editar', 'fibienvenida-borrar',
    'ficomposicion-leer', 'ficomposicion-crear', 'ficomposicion-editar', 'ficomposicion-borrar',
    'ficonsumo-leer', 'ficonsumo-crear', 'ficonsumo-editar', 'ficonsumo-borrar',
    'ficontacto-leer', 'ficontacto-crear', 'ficontacto-editar', 'ficontacto-borrar',
    'fiformacion-leer', 'fiformacion-crear', 'fiformacion-editar', 'fiformacion-borrar',
    'fiingresos-leer', 'fiingresos-crear', 'fiingresos-editar', 'fiingresos-borrar',
    'fijusticia-leer', 'fijusticia-crear', 'fijusticia-editar', 'fijusticia-borrar',
    'firazones-leer', 'firazones-crear', 'firazones-editar', 'firazones-borrar',
    'fiobserva-leer', 'fiobserva-crear', 'fiobserva-editar', 'fiobserva-borrar',

    'firedapoyo-leer', 'firedapoyo-crear', 'firedapoyo-editar', 'firedapoyo-borrar',
    'fisalud-leer', 'fisalud-crear', 'fisalud-editar', 'fisalud-borrar',
    'fisituacion-leer', 'fisituacion-crear', 'fisituacion-editar', 'fisituacion-borrar',
    'fiviolencia-leer', 'fiviolencia-crear', 'fiviolencia-editar', 'fiviolencia-borrar',
    'vsiantec-leer', 'vsiantec-crear', 'vsiantec-editar',
    'vsigener-leer', 'vsigener-crear', 'vsigener-editar',
    'vsiactiv-leer', 'vsiactiv-crear', 'vsiactiv-editar',
    'vsiabuso-leer', 'vsiabuso-crear', 'vsiabuso-editar',
    'vsisitua-leer', 'vsisitua-crear', 'vsisitua-editar',
    'vsifacto-factorxx',
    'vsifacpr-leer', 'vsifacpr-crear', 'vsifacpr-editar', 'vsifacpr-borrar',
    'vsifacri-leer', 'vsifacri-crear', 'vsifacri-editar', 'vsifacri-borrar',
    'vsimetas-metaxxxx',
    'vsimetpo-leer', 'vsimetpo-crear', 'vsimetpo-editar', 'vsimetpo-borrar',
    'vsimetme-leer', 'vsimetme-crear', 'vsimetme-editar', 'vsimetme-borrar',

    'vsiredes-leer', 'vsiredes-crear', 'vsiredes-editar',
    'vsiredac-leer', 'vsiredac-crear', 'vsiredac-editar', 'vsiredac-borrar',
    'vsiredpa-leer', 'vsiredpa-crear', 'vsiredpa-editar', 'vsiredpa-borrar',

    'fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar',
    'fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar',
    'vsiareas-leer', 'vsiareas-crear', 'vsiareas-editar',
    'vsisocia-leer', 'vsisocia-crear', 'vsisocia-editar',
    'vsiemoci-leer', 'vsiemoci-crear', 'vsiemoci-editar',
    'vsiconse-leer', 'vsiconse-crear', 'vsiconse-editar',
    //Consulta Social en Domicilio
    'csdxxxxx-leer', 'csdxxxxx-crear', 'csdxxxxx-editar', 'csdxxxxx-borrar',
    'csdviolencia-leer', 'csdviolencia-crear', 'csdviolencia-editar', 'csdviolencia-borrar',
    'csdsituacionespecial-leer', 'csdsituacionespecial-crear', 'csdsituacionespecial-editar', 'csdsituacionespecial-borrar',
    'csdjusticia-leer', 'csdjusticia-crear', 'csdjusticia-editar', 'csdjusticia-borrar',
    'csdbienvenida-leer', 'csdbienvenida-crear', 'csdbienvenida-editar', 'csdbienvenida-borrar',
    'csdalimentacion-leer', 'csdalimentacion-crear', 'csdalimentacion-editar', 'csdalimentacion-borrar',
    'csdconclusiones-leer', 'csdconclusiones-crear', 'csdconclusiones-editar', 'csdconclusiones-borrar',
    'csddinfamiliar-leer', 'csddinfamiliar-crear', 'csddinfamiliar-editar', 'csddinfamiliar-borrar',
    'csdcomfamiliar-leer', 'csdcomfamiliar-crear', 'csdcomfamiliar-editar', 'csdcomfamiliar-borrar',
    'csdresidencia-leer', 'csdresidencia-crear', 'csdresidencia-editar', 'csdresidencia-borrar',
    'csdgeningresos-leer', 'csdgeningresos-crear', 'csdgeningresos-editar', 'csdgeningresos-borrar',
    'csdredesapoyo-leer', 'csdredesapoyo-crear', 'csdredesapoyo-editar', 'csdredesapoyo-borrar',
    'csdresservi-leer', 'csdresservi-crear', 'csdresservi-editar', 'csdresservi-borrar',
    // ficha de ingreso
    'firedactual-leer', 'firedactual-crear', 'firedactual-editar', 'firedactual-borrar',
    'fisalenf-leer', 'fisalenf-crear', 'fisalenf-editar', 'fisalenf-borrar',
    'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
    'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
    'fisustanciaconsume-leer', 'fisustanciaconsume-crear', 'fisustanciaconsume-editar', 'fisustanciaconsume-borrar',
    // Intervencion Sicosocial
    'isintervencion-leer', 'isintervencion-crear', 'isintervencion-editar', 'isintervencion-borrar',
    'isintervencion-psicologo','isintervencion-social','isintervencion-activarx',
    // ficha de observacion y seguimiento
    'fosfichaobservacion-leer', 'fosfichaobservacion-crear', 'fosfichaobservacion-editar', 'fosfichaobservacion-borrar',
    // indicadores
    // 'indicador-leer', 'indicador-crear', 'indicador-editar', 'indicador-borrar',
    'areaxxxx-leerxxxx', 'areaxxxx-crearxxx', 'areaxxxx-editarxx', 'areaxxxx-borrarxx',
    // 'inpreguntas-leer', 'inpreguntas-crear', 'inpreguntas-editar', 'inpreguntas-borrar',
    // 'inacciongestion-leer', 'inacciongestion-crear', 'inacciongestion-editar', 'inacciongestion-borrar',
    // 'inlineabase-leer', 'inlineabase-crear', 'inlineabase-editar', 'inlineabase-borrar',
    // 'inbasefuente-leer', 'inbasefuente-crear', 'inbasefuente-editar', 'inbasefuente-borrar',
    // 'indocindicador-leer', 'indocindicador-crear', 'indocindicador-editar', 'indocindicador-borrar',
    // 'invalidacion-leer', 'invalidacion-crear', 'invalidacion-editar', 'invalidacion-borrar',
    // 'inindividual-leer', 'inindividual-crear', 'inindividual-editar', 'inindividual-borrar',
    // 'ingrupal-leer', 'ingrupal-crear', 'ingrupal-editar', 'ingrupal-borrar',
    // 'inrespuesta-leer', 'inrespuesta-crear', 'inrespuesta-editar', 'inrespuesta-borrar',
    // 'inbasedocumen-leer', 'inbasedocumen-crear', 'inbasedocumen-editar', 'inbasedocumen-borrar',
    // 'invaloracion-leer', 'invaloracion-crear', 'invaloracion-editar', 'invaloracion-borrar',
    // permisos para agregar componenete familiar a justicia restaurativa
    'fijrfamiliar-leer', 'fijrfamiliar-crear', 'fijrfamiliar-editar', 'fijrfamiliar-borrar',
    'agtema-leer', 'agtema-crear', 'agtema-editar', 'agtema-borrar',
    'agtaller-leer', 'agtaller-crear', 'agtaller-editar', 'agtaller-borrar',
    'agsubtema-leer', 'agsubtema-crear', 'agsubtema-editar', 'agsubtema-borrar',
    'agcontexto-leer', 'agcontexto-crear', 'agcontexto-editar', 'agcontexto-borrar',
    'agrecurso-leer', 'agrecurso-crear', 'agrecurso-editar', 'agrecurso-borrar',
    'agconvenio-leer', 'agconvenio-crear', 'agconvenio-editar', 'agconvenio-borrar',
    'agactividad-leer', 'agactividad-crear', 'agactividad-editar', 'agactividad-borrar',
    // Asignación de permisos Acciones Individuales
    'aiindex-leer', 'aiindex-crear', 'aiindex-editar', 'aiindex-borrar',
    'aisalidamayores-leer', 'aisalidamayores-crear', 'aisalidamayores-editar', 'aisalidamayores-borrar',
    'salidajovenes-leer', 'salidajovenes-crear', 'salidajovenes-editar', 'salidajovenes-borrar',
    'aievasion-leer', 'aievasion-crear', 'aievasion-editar', 'aievasion-borrar',
    'aisalidamenores-leer', 'aisalidamenores-crear', 'aisalidamenores-editar', 'aisalidamenores-borrar',
    'airetornosalida-leer', 'airetornosalida-crear', 'airetornosalida-editar', 'airetornosalida-borrar',
    //Asignación de permisos para el módulo de Salud
    //Asignación de permisos para VSPA
    'vspa-leer', 'vspa-crear', 'vspa-editar', 'vspa-borrar',
    'vma-leer', 'vma-crear', 'vma-editar', 'vma-borrar',
    'intervención sicosocial especializada',
    //Asignación de permisos para Administración de FOS
    'fos-admin', 'fos-area-admin', 'fos-tipo-admin', 'fos-sub-tipo-admin',
    'fostipo-leer', 'fostipo-crear', 'fostipo-editar', 'fostipo-borrar',
    'fossubtipo-leer', 'fossubtipo-crear', 'fossubtipo-editar', 'fossubtipo-borrar',
    'agcargdoc-leer', 'agcargdoc-crear', 'agcargdoc-editar', 'agcargdoc-borrar',

    //Educación
    'pruediag-leerxxxx', 'pruediag-crearxxx', 'pruediag-editarxx', 'pruediag-borrarxx',
    // 'pruediagpre-leer', 'pruediagpre-crear', 'pruediagpre-editar', 'pruediagpre-borrar',
    'imatricula-leer', 'imatricula-crear', 'imatricula-editar', 'imatricula-borrar',
    'imatriculannaj-leer', 'imatriculannaj-crear', 'imatriculannaj-editar', 'imatriculannaj-borrar',



    'alertas-leer', 'alertas-crear', 'alertas-editar', 'alertas-borrar',
    'mensajes-leer', 'mensajes-crear', 'mensajes-editar', 'mensajes-borrar','mensajes-activarx',

]);
