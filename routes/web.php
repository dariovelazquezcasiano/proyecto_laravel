<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PagesController@index')->name('principal');

Route::get('/datos/show', 'PagesController@show')->name('datos.show');

Route::get('/update{id}', 'PagesController@editar')->name('editar');


Route::get('/datos/{id}/destroy', 'PagesController@destroy')->name('datos.destroy');

Route::get('/registro', 'PagesController@create')->name('formulario');

Route::post('/registro', 'PagesController@store')->name('registro');

Route::post('/actualizar{id}', 'PagesController@actualizar')->name('actualizar');

Route::get('/imprimir', 'PagesController@imprimir')->name('imprimir');

Route::post('/pdf', function ()
{
$pdf = PDF::loadHTML('<h1>Test</h1>');
return $pdf->stream();
})->name('pdf');







