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

Route::get('/adm/dashboard', 'ADMDashboardController@index')->name('dashboard');

Route::get('/adm/membros', 'ADMMembroController@index')->name('membros');
Route::get('/adm/membros/show/{codigo}',[ 'as' => 'adm.membros.show', 'uses' => 'ADMMembroController@show']);
Route::put('/adm/membros/update/{codigo}',[ 'as' => 'adm.membros.update', 'uses' => 'ADMMembroController@update']);


Route::get('/adm/entidades', 'ADMEntidadeController@index')->name('entidades');
Route::get('/adm/endidades/show/{codigo}',[ 'as' => 'adm.entidade.show', 'uses' => 'ADMEntidadeController@show']);
//Route::get('/adm/endidades/create',[ 'as' => 'adm.entidade.create', 'uses' => 'ADMEntidadeController@create']);
Route::get('/adm/endidades/store',[ 'as' => 'adm.entidade.store', 'uses' => 'ADMEntidadeController@store']);
Route::any('/adm/entidades/update/{codigo}',[ 'as' => 'adm.entidade.update', 'uses' => 'ADMEntidadeController@update']);

Route::get('/adm/solicitacoes', 'ADMSolicitacoesController@index')->name('solicitacoes');
Route::get('/adm/solicitacoes/show/{codigo}',[ 'as' => 'adm.solicitacoes.show', 'uses' => 'ADMSolicitacoesController@show']);
Route::put('/adm/solicitacoes/update/{codigo}',[ 'as' => 'adm.solicitacoes.update', 'uses' => 'ADMSolicitacaoController@update']);




Route::get('/usr/perfil', 'USRMembroController@index')->name('perfil');
Route::get('/usr/certificado', 'USRCertificadoController@index')->name('certificado');
Route::get('/usr/carteirinha', 'USRCarteirinhaController@index')->name('carteirinha');
Route::post('/usr/carterinha', 'USRCarterinhaController@store')->name('carterinha');


Route::get('/usr/qrcode', 'USRQrcodeController@index')->name('qrcode');
Route::get('/usr/2via', '2viaController@index')->name('2via');

Route::get('/inscricao', 'SiteInscricaoController@index')->name('inscricao');
Route::post('/inscricao', 'SiteInscricaoController@index')->name('inscricao');

Route::get('/consulta-inscritos', 'SiteMembrosController@index')->name('consulta-inscritos');
Route::get('/consulta-inscritos/{codigo}', 'SiteMembrosController@show')->name('consulta-inscritos');

Route::get('/consulta-instituicoes', 'SiteEntidadesController@index')->name('consulta-instituicoes');
Route::get('/consulta-instituicoes/{codigo}', 'SiteEntidadesController@show')->name('consulta-instituicoes');

Route::get('/consulta-qrcode/{codigo}', 'SiteQrcodeController@show')->name('consulta-qrcode');

Route::get('/seja-um-parceiro', 'SiteParceirosController@index')->name('seja-um-parceiro');
Route::get('/parceiros', 'SiteParceirosController@store')->name('parceiros');
