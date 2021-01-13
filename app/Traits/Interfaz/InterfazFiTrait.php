<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * realiza la comunicación entre las dos bases de datos, que se busca?
 * * que a traves de una api desarrollada en java la interfaz pueda realizar consultas e insertar registros
 * * al crar un nnaj se digite la cédula y se realice una búsqueda en la db del simi antiguo y este existe alla lo traiga y lo inserte en la nueva base de datos
 * * sino existe lo debe crear en las dos db
 */
trait InterfazFiTrait
{
    private $_urlxxxx = "http://localhost:8090/simiapi/";
    private $upisxxxx = [
        1 => 0, 2 => 0, 3 => 0, 4 => 15, 5 => 6, 6 => 12, 7 => 19, 8 => 20, 9 => 0, 10 => 10, 11 => 0, 12 => 0,
        13 => 2, 14 => 8, 15 => 7, 16 => 3, 17 => 5, 18 => 4, 19 => 140, 20 => 212, 21 => 21, 22 => 16, 23 => 14, 24 => 0, 25 => 9, 26 => 18, 27 => 17, 28 => 0, 29 => 0,
    ];

    public function getBuscarNnaj(Request $request)
    {
        // if ($request->ajax()) {
        $request->document = 1013689581;
        $request->idcampox = 'primnomb';
        $buscarxx = [
            "primapel" => "",
            "seguapel" => "",
            "primnomb" => "DANIEL",
            "segunomb" => "",
            "idcampox" => $request->idcampox,
            // "document" => '1013689581'
            "document" => $request->document,
            "defectox" => $request->defectox,
        ];
        $dataxxxx = [];
        ddd(Http::post($this->_urlxxxx . 'nnajs/buscar', $buscarxx)->json());
        foreach (Http::post($this->_urlxxxx . 'nnajs/buscar', $buscarxx)->json() as $key => $value) {
            $value['label']=$value['document'] . ' - ' .
                    $value['primapel'] . ' ' .
                    $value['seguapel'] . ' ' .
                    $value['primnomb'] . ' ' .
                    $value['segunomb'];
            $dataxxxx[] =$value;
        }
        return response()->json($dataxxxx);

        // }
    }
}
