<?php

Route::get('/', function () {
    return redirect('usuarios/listado');
});

Route::get('/admin/{demopage?}', 'DemoController@demo')->name('demo');


/********************* */
Route::get('importExport', 'UsuarioController@index');

Route::get('downloadExcel/{type}', 'UsuarioController@downloadExcel');

Route::post('importExcel', 'UsuarioController@importExcel');



Route::get('usuarios/listado', 'UsuarioController@list');

Route::get('usuarios/crear', 'UsuarioController@create');

Route::post('usuarios/crear', 'UsuarioController@store');

Route::get('/usuarios/{usuario}/editar', 'UsuarioController@edit');

Route::put('/usuarios/{usuario}/', 'UsuarioController@update');

Route::delete('/usuarios/{usuario}/', 'UsuarioController@delete');