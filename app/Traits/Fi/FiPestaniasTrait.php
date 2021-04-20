<?php

namespace app\Traits\FI;

use App\Models\fichaIngreso\FiJustrest;


trait FiPestaniasTrait
{
    public $routesxx = [
        'fidatbas',
        'fidatbas',
        'fi.vestuario',
        'fi.residencia',
        'fi.formacion',
        'ficomposicion',
        'fisalud',
        'fiingresos',
        'fiactividades',
        'firedapoyo',
        'fijusticia',
        'ficonsumo',
        'fiviolencia',
        'fisituacion',
        'ficontacto',
        'fibienvenida',
        'fiautorizacion',
        'firazones',
    ];
    public function getEstructuraPestanias($dataxxxx)
    {
        // $pestania = [
        $pestania[0] = ['routexxx' => ['routexxx' =>  $this->routesxx[0],'compleme'=>'', 'parametr' => [], 'muespest' => true], 'titupest' => 'NNAJ', 'tooltipx' => 'Listado de nnaj con FI'];
        $pestania[10] = ['routexxx' => $this->getCasoFPT($dataxxxx, $this->routesxx, 10),  'titupest' => '10. JUSTICIA RESTAURATIVA', 'tooltipx' => 'Respuestas para asignar'];

        // ['routexxx'=>[$this->routesxx[0], ] , '', [], 'NNAJ', true, '', 'Listado de nnaj con FI'],
        // ['routexxx'=>[$this->routesxx[1] ] , '.nuevo', [], "1. INFORMACI" . $this->opciones['vocalesx'][3] . "N B" . $this->opciones['vocalesx'][0] . "SICA", false, '', 'Pregunta del documento que se esté'],
        // ['routexxx'=>[$this->routesxx[2] ] , '', [], '2. VESTUARIO', false, '', 'Respuestas asignadas al combo'],
        // ['routexxx'=>[$this->routesxx[3] ] , '.nuevo', [$dataxxxx['padrexxx']->id], '3. RESIDENCIA', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[4] ] , '.nuevo', [$dataxxxx['padrexxx']->id], '4. ESCUELA', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[5] ] , '', [$dataxxxx['padrexxx']->id], '5. COMPOSICIÓN FAMILIAR', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[6] ] , '.nuevo', [$dataxxxx['padrexxx']->id], '6. SALUD', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[7] ] , '.nuevo', [$dataxxxx['padrexxx']->id], '7. GENERACIÓN DE INGRESOS', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[8] ] , '.nuevo', [$dataxxxx['padrexxx']->id], '8. ACTIVIDADES EN TIEMPO LIBRE', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[9] ] , '', [$dataxxxx['padrexxx']->id], '9. REDES DE APOYO', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[10]] , '.redirect', [$dataxxxx['padrexxx']->id], '10. JUSTICIA RESTAURATIVA', $this->getJusticiaFPT($dataxxxx), '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[11]] , '.nuevo', [$dataxxxx['padrexxx']->id], '11. CONSUMO SPA', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[12]] , '.nuevo', [$dataxxxx['padrexxx']->id], '12. VIOLENCIAS Y CONDICIÓN ESPECIAL', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[13]] , '.nuevo', [$dataxxxx['padrexxx']->id], '13. TIPO DE POBLACIÓN', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[14]] , '.nuevo', [$dataxxxx['padrexxx']->id], '14. AUTORIZACION DE VINCULACIÓN', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[15]] , '.nuevo', [$dataxxxx['padrexxx']->id], '15. BIENVENIDA', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[16]] , '.nuevo', [$dataxxxx['padrexxx']->id], '16. AUTORIZACIÓN', false, '', 'Respuestas para asignar'],
        // ['routexxx'=>[$this->routesxx[17]] , '.nuevo', [$dataxxxx['padrexxx']->id], '17. RAZONES PARA INGRESAR AL IDIPRON', false, '', 'Respuestas para asignar'],
        // ];
        return $pestania;
    }
    /**
     * permisos que va a manejar cada pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    private function getCanany($dataxxxx)
    {
        $respuest = [
            $this->routesxx[0] => ['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'],
            $this->routesxx[1] => ['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'],
            $this->routesxx[2] => ['fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar'],
            $this->routesxx[3] => ['firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar'],
            $this->routesxx[4] => ['fiformacion-leer', 'fiformacion-crear', 'fiformacion-editar', 'fiformacion-borrar'],
            $this->routesxx[5] => ['ficomposicion-leer', 'ficomposicion-crear', 'ficomposicion-editar', 'ficomposicion-borrar'],
            $this->routesxx[6] => ['fisalud-leer', 'fisalud-crear', 'fisalud-editar', 'fisalud-borrar'],
            $this->routesxx[7] => ['fiingresos-leer', 'fiingresos-crear', 'fiingresos-editar', 'fiingresos-borrar'],
            $this->routesxx[8] => ['fiactividades-leer', 'fiactividades-crear', 'fiactividades-editar', 'fiactividades-borrar'],
            $this->routesxx[9] => ['firedapoyo-leer', 'firedapoyo-crear', 'firedapoyo-editar', 'firedapoyo-borrar'],
            $this->routesxx[10] => ['fijusticia-leer', 'fijusticia-crear', 'fijusticia-editar', 'fijusticia-borrar'],
            $this->routesxx[11] => ['ficonsumo-leer', 'ficonsumo-crear', 'ficonsumo-editar', 'ficonsumo-borrar'],
            $this->routesxx[12] => ['fiviolencia-leer', 'fiviolencia-crear', 'fiviolencia-editar', 'fiviolencia-borrar'],
            $this->routesxx[13] => ['fisituacion-leer', 'fisituacion-crear', 'fisituacion-editar', 'fisituacion-borrar'],
            $this->routesxx[14] => ['ficontacto-leer', 'ficontacto-crear', 'ficontacto-editar', 'ficontacto-borrar'],
            $this->routesxx[15] => ['fibienvenida-leer', 'fibienvenida-crear', 'fibienvenida-editar', 'fibienvenida-borrar'],
            $this->routesxx[16] => ['fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar'],
            $this->routesxx[17] => ['firazones-leer', 'firazones-crear', 'firazones-editar', 'firazones-borrar'],
        ];
        $respuest = $respuest[$dataxxxx['routexxx']['routexxx']];
        return $respuest;
    }

    /**
     * armar la estructura principal de una pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestania($valuexxx)
    {
        $cananyxx = $this->getCanany($valuexxx);
        $respuest = [
            'pestania' => [
                'routexxx' => route($valuexxx['routexxx']['routexxx'].$valuexxx['routexxx']['compleme'], $valuexxx['routexxx']['parametr']), // ruta que tiene la pestaña
                'activexx' => '', // clase que activa la pestaña cuando se esté en ella
                'tituloxx' => $valuexxx['titupest'], // titulo con el que se identifica la pestanña
                'tooltipx' => $valuexxx['tooltipx'], // Ayuda para la pestaña
                'cananyxx' =>  $cananyxx,
            ],
            // 'redirect'=>
        ];
        return $respuest;
    }
    /**
     * armar las pestañas que va a tener el módulo
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestanias($dataxxxx)
    {
        $respuest = [];
        foreach ($this->getEstructuraPestanias($dataxxxx) as $key => $valuexxx) {
            if ($valuexxx['routexxx']['muespest']) {
                $respuest[] = $this->getArmarPestania($valuexxx);
            }
        }

        // ddd($respuest);
        return $respuest;
    }
    public function getRespuesta($dataxxxx)
    {
        $respuest = [];
        if ($dataxxxx['registro'] == null && !auth()->user()->can($dataxxxx['cananyxx'] . '-crear')) {
            $respuest = ['routexxx' => '', 'compleme' => '', 'parametr' => [], 'muespest' => false];
        } elseif ($dataxxxx['registro'] == null && auth()->user()->can($dataxxxx['cananyxx'] . '-crear')) {
            $respuest = ['routexxx' =>  $dataxxxx['routexxx'], 'compleme' => '.nuevo', 'parametr' => [$dataxxxx['padrexxx']->sis_nnaj_id], 'muespest' => true];
        } elseif ($dataxxxx['registro'] != null && auth()->user()->can($dataxxxx['cananyxx'] . '-editar')) {
            $respuest = ['routexxx' =>  $dataxxxx['routexxx'], 'compleme' => '.editar', 'parametr' => [$dataxxxx['padrexxx']->sis_nnaj_id, $dataxxxx['registro']->id], 'muespest' => true];
        } elseif ($dataxxxx['registro'] != null && auth()->user()->can($dataxxxx['cananyxx'] . '-leer')) {
            $respuest = ['routexxx' =>  $dataxxxx['routexxx'], 'compleme' => '.ver', 'parametr' => [$dataxxxx['padrexxx']->sis_nnaj_id, $dataxxxx['registro']->id], 'muespest' => false];
        } else {
            $respuest = ['routexxx' => '', 'compleme' => '', 'parametr' => [], 'muespest' => false];
        }
        return $respuest;
    }
    public function getJusticiaFPT($dataxxxx, $routexxx)
    {
        $dataxxxx['routexxx'] = $routexxx;
        $dataxxxx['cananyxx'] = 'fijusticia';
        $registro = FiJustrest::where('sis_nnaj_id', $dataxxxx['padrexxx']->sis_nnaj_id)->first();
        $dataxxxx['registro'] = $registro;
        $respuest = $this->getRespuesta($dataxxxx);
        return $respuest;
    }

    public function getCasoFPT($dataxxxx, $routexxx, $casoxxxx)
    {
        $respuest = [];
        if (isset($dataxxxx['padrexxx']->sis_nnaj_id)) {
            switch ($casoxxxx) {
                case 10:
                    $respuest = $this->getJusticiaFPT($dataxxxx, $routexxx[$casoxxxx]);
                    break;
            }
        } else {
            $respuest = ['routexxx' => '', 'compleme' => '', 'parametr' => [], 'muespest' => false];
        }
        return $respuest;
    }
    public function getPestanias($dataxxxx)
    {
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
    }
}
