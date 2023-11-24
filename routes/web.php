<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\CadastroAController;

Route::get('/', [CadastroAController::class, 'index']);

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/Cadastro Anime/create', [CadastroAController::class, 'create']);

Route::post('/Cadastro Anime', [CadastroAController::class, 'store']);

Route::get('/Cadastro Anime/{id}', [CadastroAController::class, 'show']);

Route::get('/Cadastro Anime/edit/{id}', [CadastroAController::class, 'edit']);

Route::delete('/Cadastro Anime/{id}', [CadastroAController::class, 'destroy']);

Route::put('/Cadastro Anime/update/{id}', [CadastroAController::class, 'update']);

Route::get('/bocchitherock', function () {
    return view('bocchitherock');
});

Route::get('/jujutsukaisen', function () {
    return view('jujutsukaisen');
});

Route::get('/onepiece', function () {
    return view('onepiece');
});


Route::get('/episodio/ep1', function () {
    return view('episodio/ep1');
});

Route::get('/episodio/ep2', function () {
    return view('episodio/ep2');
});

Route::get('/episodio/ep3', function () {
    return view('episodio/ep3');
});

Route::get('/episodio/ep4', function () {
    return view('episodio/ep4');
});

Route::get('/episodio/ep5', function () {
    return view('episodio/ep5');
});

Route::get('/episodio/ep6', function () {
    return view('episodio/ep6');
});

Route::get('/episodio/ep7', function () {
    return view('episodio/ep7');
});

Route::get('/episodio/ep8', function () {
    return view('episodio/ep8');
});

Route::get('/episodio/ep9', function () {
    return view('episodio/ep9');
});

Route::get('/episodio/ep10', function () {
    return view('episodio/ep10');
});

Route::get('/episodio/ep11', function () {
    return view('episodio/ep11');
});

Route::get('/episodio/ep12', function () {
    return view('episodio/ep12');
});

