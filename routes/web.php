<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

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

/* Route::get('/', function () {
    return view('welcome');;
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/register', 'App\Http\Controllers\UserController@register');

/* Esta rota é acrescentada na ativação da autenticação do láravel,
   para não termos êrros durante a autenticação */
Route::get('/home', 'HomeController@index')->name('home');

/* Definindo um grupo de rotas, através do método group(), para o middleware "auth", que é o
 * middlaware que verifica se o usuário está logado, se não estiver, direciona para o login.
 * Agora, todas as rotas dentro da função anômima, estão protegidas pela autenticação. */
/* Declarando um único método de rota que vai criar todas as rotas que precisamos: */
/* 1º parâmetro: O nome do recurso(no plural) e 2º parâmetro, o controler: */
Route::middleware('auth')->group(function () {
    Route::resource('empresas', 'EmpresaController');
    Route::resource('tecnicos', 'TecnicoController');
    Route::resource('historicos', 'HistoricoController');
    Route::resource('planos', 'PlanoController');
    Route::resource('clientes', 'ClientesController');
    Route::resource('representantes', 'RepresentanteController');
    Route::resource('migracao', 'MigracaoController');
    Route::resource('users', 'UsersController');
    Route::resource('ferramentas', 'FerramentasController');
    Route::resource('equipamentos', 'EquipamentosController');
    Route::resource('designacoes', 'DesignacoesController');
    Route::resource('medirvelocidades', 'MedirVelocidadeController');
    Route::resource('modelocontratos', 'ModelocontratoController');
    Route::resource('contratos', 'ContratoController');
    Route::resource('chamados', 'ChamadoController');
});

require __DIR__.'/auth.php';
