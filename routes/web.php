<?php

Route::get('/', function () {
    return redirect('admin');
});

Route::get('/admin/{demopage?}', 'DemoController@demo')->name('demo');


/********************* */
Route::get('importExport', 'UsuarioController@index');

Route::get('downloadExcel/{type}', 'UsuarioController@downloadExcel');

Route::post('importExcel', 'UsuarioController@importExcel');



Route::get('usuarios/listado', 'UsuarioController@list');

Route::get('usuarios/crear', 'UsuarioController@create');

Route::post('usuarios/crear', 'UsuarioController@store');