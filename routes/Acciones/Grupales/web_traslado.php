<?php
$routxxxx = 'traslado';
$controll = 'Acciones\Grupales\Traslado\Traslado';
Route::group(['prefix' => 'traslado'], function () use ($controll, $routxxxx) {
    Route::get('', [
	    'uses' => $controll.'Controller@index',
	    'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
    ])->name($routxxxx);
    Route::get('jovenes', [
        'uses' => $controll . 'Controller@getJovenPermiso',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.salidajovenez');
	Route::get('{padrexxx}/jovenes', [
        'uses' => $controll . 'Controller@getJovenPermiso',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.salidajovenes');
	Route::get('listaxxx', [
        'uses' => $controll . 'Controller@getSalidasMayoresGrupales',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxx');

	Route::get('nuevo', [
	    'uses' => $controll.'Controller@create',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.nuevo');
	Route::post('nuevo', [
	    'uses' => $controll.'Controller@store',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.crear');

	Route::get('editar/{modeloxx}', [
	    'uses' => $controll.'Controller@edit',
	    'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');
	Route::put('editar/{modeloxx}', [
	    'uses' => $controll.'Controller@update',
	    'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');
	Route::get('ver/{modeloxx}', [
	    'uses' => $controll.'Controller@show',
	    'middleware' => ['permission:'.$routxxxx.'-leer']
	])->name($routxxxx.'.ver');
	Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');

    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activate',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');

    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activar',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');
	Route::get('responsa', [
        'uses' => $controll . 'Controller@getResponsable',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.responsa');

});

require_once('web_trasaldonnaj.php');