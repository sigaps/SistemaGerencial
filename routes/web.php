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
Route::resource('admin/salida01', 'Salida01Controller');
Route::resource('admin/salida02', 'Salida02Controller');
Route::resource('admin/salida03', 'Salida03Controller');
Route::resource('admin/salida04', 'Salida04Controller');
Route::resource('admin/salida06', 'Salida06Controller');
Route::resource('admin/salida07', 'Salida07Controller');
Route::resource('admin/salida08', 'Salida08Controller');
Route::resource('admin/salida09', 'Salida09Controller');
Route::resource('admin/salida10', 'Salida10Controller');
Route::resource('admin/salida11', 'Salida11Controller');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{slug?}', 'HomeController@index')->name('home');


