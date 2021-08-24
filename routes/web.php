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

Route::get('/consulta-inscritos', 'SiteMembrosController@index')->name('consulta-inscritos');
Route::get('/consulta-inscritos/{codigo}', 'SiteMembrosController@show')->name('consulta-inscritos');

Route::get('/consulta-instituicoes', 'SiteEntidadesController@index')->name('consulta-instituicoes');
Route::get('/consulta-instituicoes/{codigo}', 'SiteEntidadesController@show')->name('consulta-instituicoes');

Route::get('/consulta-qrcode/{codigo}', 'SiteQrcodeController@show')->name('consulta-qrcode');

Route::get('/seja-um-parceiro', 'SiteParceirosController@index')->name('seja-um-parceiro');
Route::post('/seja-um-parceiro/store',[ 'as' => 'seja-um-parceiro.store', 'uses' => 'SiteParceirosController@store']);
Route::get('/parceiros', 'SiteParceirosController@store')->name('parceiros');

Route::get('/inscricao', 'SiteInscricaoController@index')->name('inscricao');
Route::post('/inscricao', 'SiteInscricaoController@store')->name('inscricao.store');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/adm/dashboard', 'ADMDashboardController@index')->name('dashboard');

    Route::get('/adm/membros', 'ADMMembroController@index')->name('membros');
    Route::get('/adm/membros/show/{codigo}',[ 'as' => 'adm.membros.show', 'uses' => 'ADMMembroController@show']);
    Route::post('/adm/membros/update/{codigo}',[ 'as' => 'adm.membros.update', 'uses' => 'ADMMembroController@update']);
    Route::get('/adm/membros/create',[ 'as' => 'adm.membros.create', 'uses' => 'ADMMembroController@create']);

    Route::get('/adm/entidades', 'ADMEntidadeController@index')->name('entidades');
    Route::get('/adm/entidades/show/{codigo}',[ 'as' => 'adm.entidade.show', 'uses' => 'ADMEntidadeController@show']);
    Route::get('/adm/entidades/create',[ 'as' => 'adm.entidade.create', 'uses' => 'ADMEntidadeController@create']);
    Route::post('/adm/entidades/store',[ 'as' => 'adm.entidade.store', 'uses' => 'ADMEntidadeController@store']);
    Route::any('/adm/entidades/update/{codigo}',[ 'as' => 'adm.entidade.update', 'uses' => 'ADMEntidadeController@update']);

    Route::get('/adm/solicitacoes', 'ADMSolicitacoesController@index')->name('solicitacoes');
    Route::get('/adm/solicitacoes/show/{codigo}',[ 'as' => 'adm.solicitacoes.show', 'uses' => 'ADMSolicitacoesController@show']);
    Route::get('/adm/solicitacoes/membros/{codigo}',[ 'as' => 'adm.solicitacoes.membros', 'uses' => 'ADMSolicitacoesController@showMembros']);
    Route::get('/adm/solicitacoes/entidades/{codigo}',[ 'as' => 'adm.solicitacoes.entidades', 'uses' => 'ADMSolicitacoesController@showEntidades']);
    Route::post('/adm/solicitacoes/update/{codigo}',[ 'as' => 'adm.solicitacoes.update', 'uses' => 'ADMSolicitacoesController@update']);
    //Route::put('/adm/solicitacoes/update/{codigo}/membro',[ 'as' => 'adm.solicitacoes.update', 'uses' => 'ADMSolicitacaoController@update']);
    Route::post('/adm/solicitacoes/membros/update/{codigo}',[ 'as' => 'adm.solicitacoes.membros.update', 'uses' => 'ADMSolicitacoesController@updateMembros']);
    Route::post('/adm/solicitacoes/entidades/update/{codigo}',[ 'as' => 'adm.solicitacoes.entidades.update', 'uses' => 'ADMSolicitacoesController@updateEntidades']);
    

    Route::get('/usr/perfil', 'USRMembroController@index')->name('perfil');
    Route::get('/usr/certificado', 'USRCertificadoController@index')->name('certificado');
    Route::get('/usr/carteirinha', 'USRCarteirinhaController@index')->name('carteirinha');
    Route::post('/usr/carterinha', 'USRCarterinhaController@store')->name('carterinha');

    Route::get('/usr/qrcode', 'USRQrcodeController@index')->name('qrcode');
    Route::get('/usr/2via', '2viaController@index')->name('2via');



  
    Route::get('/2via/{id}', 'USR2viaController@index')->name('2via');

    });
Route::get('/pagamento/{id}/{id2}', 'SitePagamentoController@index')->name('pagamentos');

Route::get('/pagamento/{id}/{id2}/confirmar', 'SitePagamentoController@store')->name('confirmar');

Route::get('create-zip', 'ZipArchiveController@index')->name('create-zip');
Route::get('importacao', 'ImportacaoController@index')->name('importacao');

   
