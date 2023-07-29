<?php
use App\Http\Controllers;
use App\Http\Middleware\CheckTasks;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

Route::get('/register', 'App\Http\Controllers\UserController@register');

Route::middleware('auth')->get('/dynamic-dropdown', '\App\Http\Controllers\DynamicDropdownController@index')->name('dynamic-dropdown');

/* Esta rota é acrescentada na ativação da autenticação do láravel,
   para não termos êrros durante a autenticação */
Route::get('/home', 'HomeController@index')->name('home');

/* Definindo um grupo de rotas, através do método group(), para o middleware "auth", que é o
 * middlaware que verifica se o usuário está logado, se não estiver, direciona para o login.
 * Agora, todas as rotas dentro da função anômima, estão protegidas pela autenticação. */
/* Declarando um único método de rota que vai criar todas as rotas que precisamos: */
/* 1º parâmetro: O nome do recurso(no plural) e 2º parâmetro, o controler: */
Route::middleware('auth')->group(function () {
    Route::resource('antenas', 'AntenaController');

    //Route::resource('empresas', 'EmpresaController');

    //Route::resource('tecnicos', 'TecnicoController');

    Route::resource('historicos', 'HistoricoController');

    Route::resource('planos', 'PlanoController');


    Route::resource('clientes', 'ClienteController');
    //Route::delete('clientes', [ClienteController::class, 'destroy'])->name('clientes.destroy')->middleware('can:admin');

    Route::resource('representantes', 'RepresentanteController');

    //Route::resource('migracoes', 'MigracaoController');

    Route::resource('users', 'UsersController');

    Route::resource('instaladores', 'InstaladorController');

    Route::resource('ferramentas', 'FerramentasController');

    //Route::resource('equipamentos', 'EquipamentoController');

    Route::resource('designacoes', 'DesignacaoController');

    Route::resource('modelocontratos', 'ModelocontratoController');

    Route::resource('contratos', 'ContratoController');

    Route::resource('chamados', 'ChamadoController');

    Route::resource('cabos', 'CaboController');

    Route::resource('fontes', 'FonteController');

    Route::resource('ilnbs', 'IlnbController');

    Route::resource('lnbs', 'LnbController');

    Route::resource('grooves', 'GrooveController');

    Route::resource('modens', 'ModemController');

    Route::resource('roteadores', 'RoteadorController');

    Route::resource('trias', 'TriaController');

    //Route::resource('instalacoes', 'InstalacaoController');

    Route::resource('medirvelocidades', 'MedirVelocidadeController');
});

require __DIR__ . '/auth.php';
