<?php

use App\Models\Acciones\Grupales\AgSubtema;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\fichaobservacion\FosSeguimiento;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use Illuminate\Http\Request;

Route::get('tooltip/tooltip', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	$respuest = ['tooltipx' => ''];
	if ($request->idxxxxxx > 0) {
		switch ($request->casosxxx) {
			case 'fos_stse_id':
				$fosstsex = FosSeguimiento::where('id', $request->idxxxxxx)->first();
				$respuest = ['tooltipx' => $fosstsex->fos_stses->descripcion];
				break;
			case 'fos_tse_id':
				$fostsexx = FosTse::where('id', $request->idxxxxxx)->first();
				$respuest = ['tooltipx' => $fostsexx->descripcion];
				break;
			case 'ag_tema_id':
					$fostsexx = AgTema::where('id', $request->idxxxxxx)->first();
					$respuest = ['tooltipx' => $fostsexx->s_descripcion];
				break;

			case 'ag_taller_id':
			case 'ag_sttran_id':
					$fostsexx = AgTaller::where('id', $request->idxxxxxx)->first();
					$respuest = ['tooltipx' => $fostsexx->s_descripcion];
				break;
			case 'ag_sttema_id':
					$fostsexx = AgSubtema::where('id', $request->idxxxxxx)->first();
					$respuest = ['tooltipx' => $fostsexx->s_descripcion];
				break;

			
					
					
					
				
		}
	}
	//ddd($respuest);
	return response()->json($respuest);
});
