<?php

use Spatie\Permission\Models\Role;

Role::create(['name' => 'AUXILIAR DE ENFERMERÍA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])
            ->givePermissionTo([
                'contrase-editar',
                'vsinnajs-leer',
                'vsixxxxx-leer',
                'vsixxxxx-editar',
                'vsidabas-leer',
                'vsidatbi-leer',
                'vsibienv-leer',
                'vsiviole-leer',
                'vsieduca-leer',
                'vsirelac-leer',
                'vsisalud-leer',
                'vsidinam-leer',
                'vsidfpad-leer',
                'vsidfmad-leer',
                'vsirefam-leer',
                'vsiantec-leer',
                'vsigener-leer',
                'vsiabuso-leer',
                'vsiredes-leer',
                'vsiredac-leer',
                'vsiredpa-leer',
                'vsisitua-leer',
                'vsiactiv-leer',
                'vsiemoci-leer',
                'vsiemoci-crear',
                'vsiconsu-leer',
                'vsifacpr-leer',
                'vsimetme-leer',
                'vsiareas-leer',
                'vsisocia-leer',
                'vsiconse-leer',
                'fidatbas-leer',
                'fivestuario-leer',
                'firesidencia-leer',
                'fiactividades-leer',
                'fibienvenida-leer',
                'ficomposicion-leer',
                'ficonsumo-leer',
                'fisustanciaconsume-leer',
                'fosfichaobservacion-leer',
                'fosfichaobservacion-crear',
                'fosfichaobservacion-editar',
                'agtaller-leer',
                'agtaller-crear',
                'agtaller-editar',
                'agactividad-leer',
                'agactividad-crear',
                'agactividad-editar',
                'aiindex-leer',
                'territorio-modulo',
                'acciones-modulo',
                'accindiv-modulo',
                'accigrup-modulo',
                'indiadmi-modulo',
                'fosadmin-modulo',
                'motaller-modulo',
            ]);

