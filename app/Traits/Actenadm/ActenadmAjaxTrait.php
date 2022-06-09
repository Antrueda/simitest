<?php

namespace App\Traits\Actenadm;

use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ActenadmAjaxTrait
{
    public function getUPZ(Request $request)
    {
        $respuest = $this->getUpzsComboCT([
            'localidx' => $request->sis_localidad_id,
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true
        ]);
        return response()->json($respuest);
    }

    public function getBarrio(Request $request)
    {
        return response()->json($this->getBarriosComboCT([
            'localidx' => $request->sis_localidad_id,
            'selected' => $request->selected,
            'upzidxxx' => $request->sis_upz_id,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'ordenxxx' => 'ASC'
        ]));
    }

    /**
     * combo para el responsable de la upi
     *
     * @param Request $request
     * @return string $respuest
     */
    public function getResponsableUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => false,
            'ajaxxxxx' => true,
            'whereinx' => [$request->padrexxx]
        ];
        $respuest = response()->json($this->getResponsableUpiCT($dataxxxx));
        return $respuest;
    }
    /**
     * combo para los servicios de la upi
     *
     * @param Request $request
     * @return string $respuest
     */
    public function getServiciosUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx
        ];
        $respuest = response()->json($this->getServiciosUpiComboCT($dataxxxx));
        return $respuest;
    }

    public function getActividades($dataxxxx)
    {
        $parametros = [];
        switch ($dataxxxx['accionxx']) {
            case 2643:
                $dataxxxx['temaxxxx'] = 398;
                break;
            case 2644:
                $dataxxxx['temaxxxx'] = 397;
                break;
            case 2645:
                $dataxxxx['temaxxxx'] = 395;
                break;
            case 2646:
                $dataxxxx['temaxxxx'] = 399;
                break;
            case 2647:
                $dataxxxx['temaxxxx'] = 396;
                break;
        }
        if ($dataxxxx['accionxx'] != 0)
            $parametros = $this->getTemacomboCT($dataxxxx)['comboxxx'];
        return $parametros;
    }
    public function getActividadesAjax(Request $request)
    {
        $parametros = [];
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'orederby' => 'asc',
            'campoxxx' => 'nombre',
            'selected' => $request->selected,
            'accionxx' => $request->padrexxx
        ];
        $parametros = $this->getActividades($dataxxxx);
        return response()->json($parametros);
    }

    public function getDocuAyudaAjax(Request $request)
    {
        $dataxxxx = [
            'temaxxxx' => 286,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
        ];
        if ($request->docufisi != 228) {
            $dataxxxx['inxxxxxx'] = [235];
            $dataxxxx['cabecera'] = false;
        } else {
            $dataxxxx['inxxxxxx'] = [1477, 1474];
            $dataxxxx['cabecera'] = true;
        }
        $respuest = $this->getTemacomboCT($dataxxxx)['comboxxx'];
        return response()->json($respuest);
    }


    public function getContratistaUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependid' => $request->padrexxx
        ];

        $respuest = response()->json($this->getFuncionarioContratistaComboCT($dataxxxx)['comboxxx']);
        return $respuest;
    }

    public function getTiempoCargue(Request $request)
    {
        $respuest = $this->getPuedeCargar([
            'estoyenx' => 2,
            'upixxxxx' => $request->padrexxx,
            'fechregi' => Carbon::now()->toDateString()
        ]);

        $fechaxxx = explode('-', $respuest['inicioxx']);
        $respuest = response()->json(['anioxxxx' => $fechaxxx[0], 'mesxxxxx' => $fechaxxx[1] - 1, 'diaxxxxx' => $fechaxxx[2],]);
        return $respuest;
    }
}
