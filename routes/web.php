<?php


Route::get('/', function () {
    return view('auth/login');
});

Route::auth();
Auth::routes();

Route::get('/admin/users/create', 'UsuarioController@create')->name('admin.users.create');
Route::get('/admin/users/edit', 'UsuarioController@edit')->name('admin.users.update');
Route::get('admin/users/estado/{id}','UsuarioController@estado');

Route::resource('admin/expediente','ExpedienteController');
Route::resource('admin/utilidad','UtilidadController');
Route::resource('admin/users','UsuarioController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{slug?}', 'HomeController@index')->name('home');


