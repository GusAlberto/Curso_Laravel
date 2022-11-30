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


Route::get('/', function () {
    return view('welcome');
});

//Criando rota Users para usuários
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

//Implementando a rota Contato pegando acesso pelo Id, sem mostrar no caminho
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
