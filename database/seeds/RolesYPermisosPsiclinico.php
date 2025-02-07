<?php

use Spatie\Permission\Models\Role;

 Role::find(7)->givePermissionTo([
                'territorio-modulo','acciones-modulo','accindiv-modulo','accigrup-modulo','contrase-editar',
                'agactividad-leer', 'agactividad-crear', 'agactividad-editar', 'agactividad-borrar',
                'vsidabas-leer',
                'vsibienv-leer',
                'csdatbas-leer',
                'nnajvisi-leer',
                'vsixxxxx-leer',
                'fiarchiv-leer',
                'vsiviole-leer',
                'vsieduca-leer',
                'vsisalud-leer',
                'vsidinam-leer',
                'vsidfpad-leer',
                'vsidfmad-leer',
                'vsirefam-leer',
                'vsirelac-leer',
                'vsiconsu-leer',
                'vsiantec-leer',
                'vsigener-leer',
                'vsiactiv-leer',
                'vsiabuso-leer',
                'vsidatbi-leer',
                'vsisitua-leer',
                'vsifacto-factorxx',
                'acuerdo-editar',
                'vsifacpr-leer',
                'vsifacri-leer',
                'vsimetas-metaxxxx',
                'vsimetpo-leer',
                'vsimetme-leer',
                'vsiredes-leer',
                'vsiredac-leer',
                'vsiredpa-leer',
                'vsiareas-leer',
                'vsisocia-leer',
                'vsiemoci-leer',
                'vsiconse-leer',
                //Consulta Social en Domicilio
                'csdxxxxx-leer',
                'csdviolencia-leer',
                'csdsituacionespecial-leer',
                'csdjusticia-leer',
                'csdbienvenida-leer',
                'csdalimentacion-leer',
                'csdconclusiones-leer',
                'csddinfamiliar-leer',
                'csdcomfamiliar-leer',
                'csdresidencia-leer',
                'csdgeningresos-leer',
                'csdredesapoyo-leer',
                'csdgenaporta-leer',
                'csdredactual-leer',
                'csddfpad-leer',
                'csddfmad-leer',
                'csdredesapoyo-leer',
                'csdresservi-leer',
                'csdreshogar-leer',
                'csdrescomparte-leer',
                'csdcomfamirobserva-leer',

                // ficha de ingreso
                'ficonvio-leer',
                'fivestuario-leer',
                'firesidencia-leer',
                'fidatbas-leer',
                'fiautorizacion-leer',

                'fiactividades-leer',
                'fibienvenida-leer',
                'ficomposicion-leer',
                'ficonsumo-leer',
                'ficontacto-leer',
                'fiformacion-leer',
                'fiingresos-leer',
                'fijusticia-leer',
                'firazones-leer',
                'fiobserva-leer',
                'firedapoyo-leer',
                'fisalud-leer',
                'fisituacion-leer',
                'fiviolencia-leer',

                'firedactual-leer',
                'fisalenf-leer',
                'fiprocesojudicial-leer',
                'fiprocesojudicial-leer',
                'fisustanciaconsume-leer',
                // permisos para agregar componenete familiar a justicia restaurativa
                'fijrfamiliar-leer',
                // Intervencion Sicosocial
                'isintervencion-leer', 'isintervencion-crear', 'isintervencion-editar', 'isintervencion-borrar',
                // ficha de observacion y seguimiento
                'fosfichaobservacion-leer', 'fosfichaobservacion-crear', 'fosfichaobservacion-editar', 'fosfichaobservacion-borrar',
                // Asignación de permisos Acciones Individuales
                'aiindex-leer', 'aiindex-crear', 'aiindex-editar', 'aiindex-borrar',
                'aisalidamayores-leer',
                'salidajovenes-leer',
                'aievasion-leer',
                'aisalidamenores-leer',
                'airetornosalida-leer',
                'evasionves-leer',
                'evasionpar-leer',
                'agrelacion-leer',
                'taccform-modulo','agtaller-leer', 'agtaller-crear', 'agtaller-editar', 'agtaller-borrar',
                'agrespon-leer', 'agrespon-crear', 'agrespon-editar', 'agrespon-borrar','agrespon-activarx',
                'agasiste-leer', 'agasiste-crear', 'agasiste-editar', 'agasiste-borrar','agasiste-activarx',
                'agrecurs-leer', 'agrecurs-crear', 'agrecurs-editar', 'agrecurs-borrar','agrecurs-activarx',
                /**
                 * cargue de documentos
                 */
                'cargdocu-modulo',
                'cardocfi-leer', 'cardocfi-crear', 'cardocfi-editar', 'cardocfi-borrar','cardocfi-activarx',
                'agcargdoc-leer', 'agcargdoc-crear', 'agcargdoc-editar', 'agcargdoc-borrar',
                'intervención sicosocial especializada'
            ]);


