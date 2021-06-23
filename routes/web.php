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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adm/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/adm/membros', 'MembroController@index')->name('membros');

Route::get('/adm/membros/show/{codigo}',[ 'as' => 'adm.membros.show', 'uses' => 'MembroController@show']);

Route::get('/adm/entidades', 'EntidadeController@index')->name('entidades');
Route::get('/adm/endidades/show/{codigo}',[ 'as' => 'adm.entidade.show', 'uses' => 'EntidadeController@show']);
Route::get('/adm/endidades/create',[ 'as' => 'adm.entidade.create', 'uses' => 'EntidadeController@create']);
Route::get('/adm/endidades/store',[ 'as' => 'adm.entidade.store', 'uses' => 'EntidadeController@store']);

Route::get('/usr/perfil', 'ProfileController@index')->name('perfil');
Route::get('/usr/qrcode', 'QrCodeController@index')->name('qrcode');
Route::get('/usr/2via', '2viaController@index')->name('2via');
Route::get('/usr/certificado', 'CertificadoController@index')->name('certificado');

Route::get('/inscricao', 'SiteMembrosController@index')->name('inscricao');
Route::post('/inscricao', 'SiteMembrosController@index')->name('inscricao');

Route::get('/consulta-inscritos', 'SiteMembrosController@index')->name('consulta-inscritos');
Route::get('/consulta-inscritos/{codigo}', 'SiteMembrosController@show')->name('consulta-inscritos');

Route::get('/consulta-instituicoes', 'SiteEntidadesController@index')->name('consulta-instituicoes');
Route::get('/consulta-instituicoes/{codigo}', 'SiteEntidadesController@show')->name('consulta-instituicoes');

Route::get('/consulta-qrcode/{codigo}', 'SiteQrcodeController@show')->name('consulta-qrcode');

