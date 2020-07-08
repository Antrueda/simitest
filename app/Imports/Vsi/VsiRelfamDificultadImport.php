<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\Pivotes\VsiRelfamDificultad;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiRelfamDificultadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        echo $row[2].'<pre>';
        $dataxxxx = [
            'parametro_id' => $row[0],
            'vsi_relfamiliar_id' => $row[1],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
        ];
        print_r($dataxxxx);        
        return new VsiRelfamDificultad($dataxxxx);
    }
}