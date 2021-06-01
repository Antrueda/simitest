<?php
// $permisox = 'inbasefuente';
$routexxx = 'indiliba';
$controll = "Indicadores\Admin\In" . ucfirst($routexxx) . "Controller@";
Route::group(['prefix' => '{padrexxx}/paramelineabases'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-asignarx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'getIndiliba',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-asignarx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx . '.listaxxx');
    Route::get('asignarx', [
        'uses' => $controll . 'getIndilibaAsignar',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-asignarx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx . '.asignarx');
    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');
});

Route::group(['prefix' => 'paramelineabase'], function () use ($routexxx, $controll) {
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.leerxxxx');
});
