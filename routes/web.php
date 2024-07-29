<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;

Route::match(['get', 'post'], '/', [ProdutoController::class, 'index'])
    ->name('home');

Route::match(['get', 'post'], '/categoria', [ProdutoController::class, 'categoria'])
    ->name('categoria');

Route::match(['get', 'post'], '/categoria/{idcategoria}', [ProdutoController::class, 'categoria'])
    ->name('categoria_por_id');

Route::match(['get', 'post'], '/cadastrar', [ClienteController::class, 'cadastrar'])
    ->name('cadastrar');

Route::match(['get', 'post'], '/usuario/cadastrar', [ClienteController::class, 'cadastrarUsuario'])
    ->name('cadastrar_usuario');

Route::match(['get', 'post'], '/carrinho/adicionar/{idproduto}', [ProdutoController::class, 'adicionarCarrinho'])
    ->name('adicionar_carrinho');

Route::match(['get', 'post'], '/carrinho', [ProdutoController::class, 'verCarrinho'])
    ->name('ver_carrinho');

    Route::match(['get', 'post'], '/excluircarrinho/{indice}', [ProdutoController::class, 'excluirCarrinho'])
    ->name('carrinho_excluir');
