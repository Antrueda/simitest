<?php

use Spatie\Permission\Models\Role;

Role::create(['name' => 'PSICÓLOGO(A)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])
            ->givePermissionTo([
                'territorio-modulo','acciones-modulo','accindiv-modulo','accigrup-modulo','contrase-editar',
                'agactividad-leer', 'agactividad-crear', 'agactividad-editar', 'agactividad-borrar',
                'vsidabas-leer', 'vsidabas-crear', 'vsidabas-editar',
                'vsibienv-leer', 'vsibienv-crear', 'vsibienv-editar',

                'vsiviole-leer', 'vsiviole-crear', 'vsiviole-editar',
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
                'vsiareas-leer', 'vsiareas-crear', 'vsiareas-editar',
                'vsisocia-leer', 'vsisocia-crear', 'vsisocia-editar',
                'vsiemoci-leer', 'vsiemoci-crear', 'vsiemoci-editar',
                'vsiconse-leer', 'vsiconse-crear', 'vsiconse-editar',
                //Consulta Social en Domicilio
                'csddatobasico-leer', 'csddatobasico-crear', 'csddatobasico-editar', 'csddatobasico-borrar',
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
                // ficha de ingreso
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
                'isintervencion-leer', 'isintervencion-crear', 'isintervencion-editar', 'isintervencion-borrar',
                // ficha de observacion y seguimiento
                'fosfichaobservacion-leer', 'fosfichaobservacion-crear', 'fosfichaobservacion-editar', 'fosfichaobservacion-borrar',
                // Asignación de permisos Acciones Individuales
                'aiindex-leer', 'aiindex-crear', 'aiindex-editar', 'aiindex-borrar',
                'aisalidamayores-leer', 'aisalidamayores-crear', 'aisalidamayores-editar', 'aisalidamayores-borrar',
                'aievasion-leer', 'aievasion-crear', 'aievasion-editar', 'aievasion-borrar',
                'aisalidamenores-leer', 'aisalidamenores-crear', 'aisalidamenores-editar', 'aisalidamenores-borrar',
                'airetornosalida-leer', 'airetornosalida-crear', 'airetornosalida-editar', 'airetornosalida-borrar',

            ]);

