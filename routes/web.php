<?php

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

use App\Models\Roupas;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-roupas', function(Request $request) {

    Roupas::create([
        'peca' => $request->peca,
        'preco' => $request->preco
    ]);

    echo "Produto criado com sucesso!";
});

Route::post('/listar-roupas/{id}', function($id) {
    $roupas = Roupas::find($id);
    return view('listar', ['roupas' => $roupas]);
});

Route::post('/editar-roupas/{id}', function($id) {
    $roupas = Roupas::find($id);
    return view('editar', ['roupas' => $roupas]);
});

Route::post('/editar-roupas/{id}', function(Request $request, $id) {
    $roupas = Roupas::find($id);
    
    Roupas::update([
        'peca' => $request->peca,
        'preco' => $request->preco
    ]);
    echo "Produto editado com sucesso!";
});

Route::post('/excluir-roupas/{id}', function(Request $request, $id) {
    $roupas = Roupas::find($id);
    $roupas->delete();

    echo "Produto excluido com sucesso!";
});