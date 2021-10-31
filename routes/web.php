<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;



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

//========================== Rotas Categoria========================================

route::get('/categoria',[CategoriaController::class, 'index'])->name('categoria.index');
route::get('/categoria/create',[CategoriaController::class, 'create'])->name('categoria.create');
route::get('/categoria/show/{id}',[CategoriaController::class, 'show'])->name('categoria.show');
route::get('/categoria/deletar/{id}',[CategoriaController::class, 'deletar'])->name('categoria.deletar');
route::delete('/categoria/delete/{id}',[CategoriaController::class, 'destroy'])->name('categoria.delete');
route::post('/categoria/store/',[CategoriaController::class, 'store'])->name('categoria.store');
route::get('/categoria/editar/{id}',[CategoriaController::class, 'edit'])->name('categoria.edit');
route::put('/categoria/update/{id}',[CategoriaController::class, 'update'])->name('categoria.update');


//========================== Rotas fornecedores========================================

route::get('/fornecedor',[FornecedorController::class, 'index'])->name('fornecedor.index');
route::get('/fornecedor/create',[FornecedorController::class, 'create'])->name('fornecedor.create');
route::get('/fornecedor/show/{id}',[FornecedorController::class, 'show'])->name('fornecedor.show');
route::get('/fornecedor/deletar/{id}',[FornecedorController::class, 'deletar'])->name('fornecedor.deletar');
route::delete('/fornecedor/delete/{id}',[FornecedorController::class, 'destroy'])->name('fornecedor.delete');
route::post('/fornecedor/store/',[FornecedorController::class, 'store'])->name('fornecedor.store');
route::get('/fornecedor/editar/{id}',[FornecedorController::class, 'edit'])->name('fornecedor.edit');
route::put('/fornecedor/update/{id}',[FornecedorController::class, 'update'])->name('fornecedor.update');

Route::get('/', function () {
    return view('welcome');
})->name('home');

//========================== Rotas Produtos========================================

route::get('/produto',[ProdutoController::class, 'index'])->name('produto.index');
route::get('/produto/create',[ProdutoController::class, 'create'])->name('produto.create');
route::get('/produto/show/{id}',[ProdutoController::class, 'show'])->name('produto.show');
route::get('/produto/deletar/{id}',[ProdutoController::class, 'deletar'])->name('produto.deletar');
route::delete('/produto/delete/{id}',[ProdutoController::class, 'destroy'])->name('produto.delete');
route::post('/produto/store/',[ProdutoController::class, 'store'])->name('produto.store');
route::get('/produto/editar/{id}',[ProdutoController::class, 'edit'])->name('produto.edit');
route::put('/produto/update/{id}',[ProdutoController::class, 'update'])->name('produto.update');
