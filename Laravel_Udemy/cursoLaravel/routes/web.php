<?php

require __DIR__.'/../vendor/autoload.php';

use App\Http\Controllers\{
    UserController
};

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});
 */

// Se o Laravel receber uma função no segundo parâmetro do verbo Get, ele irá entender que é de callback

// ROTA DA PÁGINA PRINCIPAL
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

// ROTA DA PÁGINA DE LOGIN
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login']);

// ROTA DA PÁGINA DE APRESENTAÇÃO
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

// ROTA DA PÁGINA DE COMUNICAÇÃO
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);

// ROTA DA PÁGINA DE ENTRADA DO USUÁRIO
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

/*
// Implementando a rota Contato pegando acesso pelo Id, sem mostrar no caminho
 Route::get('/contato/[id?]', function($id = null) {
    return "Contato id = $id";
});

Route::post('/contato', function() {
    dd($_POST);
    return "Contato POST";
});

Route::put('/contato', function() {
    return "Contato PUT";
});
*/
