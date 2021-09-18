<?php

use Spatie\Permission\Models\Permission;

trait EstructuraBaseTrait
{
    private $leerxxxx = 'Permiso que permite ver el contenido para: ';
    private $crearxxx = 'Permiso que permite crear registro para: ';
    private $editarxx = 'Permiso que permite editar registro para: ';
    private $borrarxx = 'Permiso que permite inactivar registro para: ';
    private $moduloxx = 'Permiso que habilita el contenido del Módulo: ';
    private $activarx = 'Permiso que permite activar registro para: ';
    private $asignarx = 'Permiso que permite asignar registro para: ';
    private $permisox = '';
    private $compleme = '';

    public function getBase()
    {

        Permission::create([
            'name' => $this->tpermisox . '-leerxxxx',
            'sis_pestania_id' => 1,
            'descripcion' => $this->leerxxxx . $this->compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $this->tpermisox . '-crearxxx',
            'sis_pestania_id' => 1,
            'descripcion' => $this->crearxxx . $this->compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $this->tpermisox . '-editarxx',
            'sis_pestania_id' => 1,
            'descripcion' => $this->editarxx . $this->compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $this->tpermisox . '-borrarxx',
            'sis_pestania_id' => 1,
            'descripcion' => $this->borrarxx . $this->compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $this->tpermisox . '-activarx',
            'sis_pestania_id' => 1,
            'descripcion' => $this->activarx . $this->compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);
    }
}
