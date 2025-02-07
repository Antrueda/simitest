<?php

use Spatie\Permission\Models\Role;

Role::find(3)
       ->givePermissionTo([
        'territorio-modulo', 'acciones-modulo', 'accindiv-modulo', 'accigrup-modulo', 'contrase-editar',
        'agactividad-leer', 'agactividad-crear', 'agactividad-editar',
        'vsidabas-leer', 'vsidabas-crear', 'vsidabas-editar',
        'vsibienv-leer', 'vsibienv-crear', 'vsibienv-editar',
        'csdatbas-leer', 'csdatbas-crear', 'csdatbas-editar',
        'nnajvisi-leer', 'nnajvisi-crear', 'nnajvisi-editar', 'nnajvisi-borrar',
        'vsixxxxx-leer', 'vsixxxxx-crear', 'vsixxxxx-editar',
        'fiarchiv-leer', 'fiarchiv-crear', 'fiarchiv-editar', 'fiarchiv-borrar', 'fiarchiv-descarga',
        'vsiviole-leer', 'vsiviole-crear', 'vsiviole-editar',
        'vsitipov-leer', 'vsitipov-crear', 'vsitipov-editar', 'vsitipov-borrar',
        'vsieduca-leer', 'vsieduca-crear', 'vsieduca-editar',
        'vsisalud-leer', 'vsisalud-crear', 'vsisalud-editar',
        'vsidinam-leer', 'vsidinam-crear', 'vsidinam-editar',
        'vsidfpad-leer', 'vsidfpad-crear', 'vsidfpad-editar', 'vsidfpad-borrar',
        'vsidfmad-leer', 'vsidfmad-crear', 'vsidfmad-editar', 'vsidfmad-borrar',


        'vsirefam-leer', 'vsirefam-crear', 'vsirefam-editar',
        'vsirelac-leer', 'vsirelac-crear', 'vsirelac-editar',
        'vsiconsu-leer', 'vsiconsu-crear', 'vsiconsu-editar',
        'vsiantec-leer', 'vsiantec-crear', 'vsiantec-editar',
        'vsigener-leer', 'vsigener-crear', 'vsigener-editar',
        'vsiactiv-leer', 'vsiactiv-crear', 'vsiactiv-editar',
        'vsiabuso-leer', 'vsiabuso-crear', 'vsiabuso-editar',
        'vsidatbi-leer', 'vsidatbi-crear', 'vsidatbi-editar',
        'vsisitua-leer', 'vsisitua-crear', 'vsisitua-editar',
        'vsifacto-factorxx',
        'acuerdo-editar',
        'vsifacpr-leer', 'vsifacpr-crear', 'vsifacpr-editar', 'vsifacpr-borrar',
        'vsifacri-leer', 'vsifacri-crear', 'vsifacri-editar', 'vsifacri-borrar',
        'vsimetas-metaxxxx',
        'vsimetpo-leer', 'vsimetpo-crear', 'vsimetpo-editar', 'vsimetpo-borrar',
        'vsimetme-leer', 'vsimetme-crear', 'vsimetme-editar', 'vsimetme-borrar',
        'vsiredes-leer', 'vsiredes-crear', 'vsiredes-editar',
        'vsiredac-leer', 'vsiredac-crear', 'vsiredac-editar', 'vsiredac-borrar',
        'vsiredpa-leer', 'vsiredpa-crear', 'vsiredpa-editar', 'vsiredpa-borrar',
        'vsiareas-leer', 'vsiareas-crear', 'vsiareas-editar',
        'vsisocia-leer', 'vsisocia-crear', 'vsisocia-editar',
        'vsiemoci-leer', 'vsiemoci-crear', 'vsiemoci-editar',
        'vsiconse-leer', 'vsiconse-crear', 'vsiconse-editar',
        //Consulta Social en Domicilio
        'csdxxxxx-leer', 'csdxxxxx-crear', 'csdxxxxx-editar',
        'csdviolencia-leer', 'csdviolencia-crear', 'csdviolencia-editar',
        'csdsituacionespecial-leer', 'csdsituacionespecial-crear', 'csdsituacionespecial-editar',
        'csdjusticia-leer', 'csdjusticia-crear', 'csdjusticia-editar',
        'csdbienvenida-leer', 'csdbienvenida-crear', 'csdbienvenida-editar',
        'csdalimentacion-leer', 'csdalimentacion-crear', 'csdalimentacion-editar',
        'csdconclusiones-leer', 'csdconclusiones-crear', 'csdconclusiones-editar',
        'csddinfamiliar-leer', 'csddinfamiliar-crear', 'csddinfamiliar-editar',
        'csdcomfamiliar-leer', 'csdcomfamiliar-crear', 'csdcomfamiliar-editar',
        'csdresidencia-leer', 'csdresidencia-crear', 'csdresidencia-editar',
        'csdgeningresos-leer', 'csdgeningresos-crear', 'csdgeningresos-editar',
        'csdredesapoyo-leer', 'csdredesapoyo-crear', 'csdredesapoyo-editar',
        'csdgenaporta-leer', 'csdgenaporta-crear', 'csdgenaporta-editar',
        'csdredactual-leer', 'csdredactual-crear', 'csdredactual-editar',
        'csddfpad-leer', 'csddfpad-crear', 'csddfpad-editar', 'csddfpad-borrar',
        'csddfmad-leer', 'csddfmad-crear', 'csddfmad-editar', 'csddfmad-borrar',
        'csdredesapoyo-leer', 'csdredesapoyo-crear', 'csdredesapoyo-editar', 'csdredesapoyo-borrar',
        'csdresservi-leer', 'csdresservi-crear', 'csdresservi-editar', 'csdresservi-borrar',
        'csdreshogar-leer', 'csdreshogar-crear', 'csdreshogar-editar', 'csdreshogar-borrar',
        'csdrescomparte-leer', 'csdrescomparte-crear', 'csdrescomparte-editar', 'csdrescomparte-borrar',
        'csdcomfamirobserva-leer', 'csdcomfamirobserva-crear', 'csdcomfamirobserva-editar',

        // ficha de ingreso
        'ficonvio-leer', 'ficonvio-crear', 'ficonvio-editar', 'ficonvio-borrar',
        'fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar',
        'firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar',
        'fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar',
        'fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar',

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

        'firedactual-leer', 'firedactual-crear', 'firedactual-editar', 'firedactual-borrar',
        'fisalenf-leer', 'fisalenf-crear', 'fisalenf-editar', 'fisalenf-borrar',
        'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
        'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
        'fisustanciaconsume-leer', 'fisustanciaconsume-crear', 'fisustanciaconsume-editar', 'fisustanciaconsume-borrar',
        // permisos para agregar componenete familiar a justicia restaurativa
        'fijrfamiliar-leer', 'fijrfamiliar-crear', 'fijrfamiliar-editar', 'fijrfamiliar-borrar',
        // Intervencion Sicosocial
        'isintervencion-leer', 'isintervencion-crear', 'isintervencion-editar', 'isintervencion-borrar', 'isintervencion-psicologo',
        // ficha de observacion y seguimiento
        'fosfichaobservacion-leer', 'fosfichaobservacion-crear', 'fosfichaobservacion-editar', 'fosfichaobservacion-borrar',
        // Asignación de permisos Acciones Individuales
        'aiindex-leer', 'aiindex-crear', 'aiindex-editar', 'aiindex-borrar',
        'aisalidamayores-leer', 'aisalidamayores-crear', 'aisalidamayores-editar',
        'salidajovenes-leer', 'salidajovenes-crear', 'salidajovenes-editar',
        'aievasion-leer', 'aievasion-crear', 'aievasion-editar',
        'aisalidamenores-leer', 'aisalidamenores-crear', 'aisalidamenores-editar',
        'airetornosalida-leer', 'airetornosalida-crear', 'airetornosalida-editar',
        'evasionves-leer', 'evasionves-crear', 'evasionves-editar', 'evasionves-borrar',
        'evasionpar-leer', 'evasionpar-crear', 'evasionpar-editar', 'evasionpar-borrar',
        'agrelacion-leer', 'agrelacion-crear', 'agrelacion-editar', 'agrelacion-borrar',
        'taccform-modulo', 'agtaller-leer', 'agtaller-crear', 'agtaller-editar', 'agtaller-borrar',
        'agrespon-leer', 'agrespon-crear', 'agrespon-editar', 'agrespon-borrar', 'agrespon-activarx',
        'agasiste-leer', 'agasiste-crear', 'agasiste-editar', 'agasiste-borrar', 'agasiste-activarx',
        'agrecurs-leer', 'agrecurs-crear', 'agrecurs-editar', 'agrecurs-borrar', 'agrecurs-activarx',
        //traslado
        'traslado-leer', 'traslado-crear', 'traslado-editar', 'traslado-borrar',
        'traslannaj-leer', 'traslannaj-crear', 'traslannaj-editar', 'traslannaj-borrar',
        /**
         * cargue de documentos
         */
        'cargdocu-modulo',
        'cardocfi-leer', 'cardocfi-crear', 'cardocfi-editar', 'cardocfi-borrar', 'cardocfi-activarx',
        'agcargdoc-leer', 'agcargdoc-crear', 'agcargdoc-editar', 'agcargdoc-borrar',

        /** Módulo asistencias */
        'actamodu-moduloxx',
        //permisos para el crud de acta de encuentro
        'actaencu-leerxxxx', 'actaencu-crearxxx', 'actaencu-editarxx', 'actaencu-borrarxx', 'actaencu-activarx',
        // permisos para los contactos del acta de encuentro
        'aecontac-leerxxxx', 'aecontac-crearxxx', 'aecontac-editarxx', 'aecontac-borrarxx', 'aecontac-activarx',
        // permisos para las asistencias del acta de encuentro
        // 'asistenc-leerxxxx', 'asistenc-crearxxx', 'asistenc-editarxx', 'asistenc-borrarxx', 'asistenc-activarx'

    ]);
