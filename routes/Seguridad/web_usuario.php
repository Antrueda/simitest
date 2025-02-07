<?php

$controll = 'Seguridad\Usuario\Usuario';
$routexxx = 'usuario';
Route::group(['prefix' => 'usuario'], function () use ($controll, $routexxx) {

    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx);
    Route::get('listaxxx', [
	    'uses' => $controll.'Controller@getUsuario',
	    'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
	])->name($routexxx.'.listaxxx');

    Route::get('listanti', [
	    'uses' => $controll.'Controller@getUsuarioAnti',
	    'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
	])->name($routexxx.'.listanti');

    Route::get('nuevo', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.nuevo');
    Route::post('crear', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.crear');
    Route::get('editar/{objetoxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');
    Route::get('editmigr/{objetoxx}', [
        'uses' => $controll . 'Controller@editmigr',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editmigr');
    Route::put('editar/{objetoxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');
    Route::get('acuerdo/{objetoxx}', [
        'uses' => $controll . 'Controller@eacuerdo',
        'middleware' => ['permission:' . $routexxx . '-acuerdo']
    ])->name($routexxx . '.acuerdo');
    Route::put('acuerdo/{objetoxx}', [
        'uses' => $controll . 'Controller@uacuerdo',
        'middleware' => ['permission:' . $routexxx . '-acuerdo']
    ])->name($routexxx . '.acuerdo');
    Route::get('ver/{objetoxx}', [
        'uses' => $controll . 'Controller@show',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.ver');

    Route::get('borrar/{objetoxx}', [
	    'uses' => $controll.'Controller@inactivate',
	    'middleware' => ['permission:'.$routexxx.'-borrar']
    ])->name($routexxx.'.borrar');

    Route::put('borrar/{objetoxx}', [
		'uses' => $controll . 'Controller@destroy',
		'middleware' => ['permission:' . $routexxx . '-borrar']
	])->name($routexxx . '.borrar');



    Route::get('motivos', [
	    'uses' => $controll.'Controller@getMotivos',
	    'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.motivosx');

    Route::post('municipio', [
        'uses' => $controll . 'Controller@municipioajax',
    ])->name($routexxx . '.municipio');




    Route::get('tiempocarga', [
        'uses' => $controll . 'Controller@tiempocarga',
    ])->name($routexxx . '.tiempocarga');


    /** Cambiar la contraseña */
    Route::get('password/{objetoxx}', [
        'uses' => $controll . 'Controller@editpassword',
        'middleware' => ['permission:usuario-editar']
    ])->name($routexxx . '.password');
    Route::put('password/{objetoxx}', [
        'uses' => $controll . 'Controller@updatepassword',
        'middleware' => ['permission:usuario-editar']
    ])->name($routexxx . '.password');

    Route::get('restart/{objetoxx}', [
        'uses' => $controll . 'Controller@getRestart',
        'middleware' => ['permission:usuario-editar']
    ])->name($routexxx . '.restartx');


    $controll = 'Seguridad\Usuario\AreaUser';
    $routexxx = 'areausua';
    Route::group(['prefix' => '{padrexxx}/areas'], function () use ($controll, $routexxx) {
        Route::get('', [
            'uses' => $controll . 'Controller@index',
            'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
        ])->name($routexxx);
        Route::get('nuevo', [
            'uses' => $controll . 'Controller@create',
            'middleware' => ['permission:' . $routexxx . '-crear']
        ])->name($routexxx . '.nuevo');
    });

    $controll = 'Seguridad\Usuario\UsuDepen';
    $routexxx = 'usudepen';
    Route::group(['prefix' => '{padrexxx}/dependencias'], function () use ($controll, $routexxx) {
        Route::get('', [
            'uses' => $controll . 'Controller@index',
            'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
        ])->name($routexxx);
        Route::get('nuevo', [
            'uses' => $controll . 'Controller@create',
            'middleware' => ['permission:' . $routexxx . '-crear']
        ])->name($routexxx . '.nuevo');
    });

    $controll = 'Seguridad\Usuario\UsuaRol';
    $routexxx = 'roleusua';
    Route::group(['prefix' => '{padrexxx}/roles'], function () use ($controll, $routexxx) {
        Route::get('', [
            'uses' => $controll . 'Controller@index',
            'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
        ])->name($routexxx);
        Route::get('nuevo', [
            'uses' => $controll . 'Controller@create',
            'middleware' => ['permission:' . $routexxx . '-crear']
        ])->name($routexxx . '.nuevo');
    });
});
require_once('web_area_user.php');
require_once('web_depe_user.php');
require_once('web_role_user.php');
require_once('web_contrasenia_user.php');
require_once('web_acuerdo_user.php');
