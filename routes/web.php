<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Middleware\ProdutosMiddleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


//rota para exibir a homePage
Route::get('/', [HomeController::class,'index'])->name('home');

//Rota para exibir o formulário de registro
route::get('/registro', [UserController::class,'showRegistroForm'])-> 
name('usuarios.registro');

//Rota para processar o registro
route::post('/registro', [UserController::class,'registro'])-> 
name('usuarios.controller');

//Rota para exibir o formulário de login'
route::get('/login', [UserController::class,'showLoginForm'])-> 
name('usuarios.login');

//Rota para processar o login
route::post('/login', [UserController::class,'login'])-> 
name('usuarios.controller');



//rota oara página interna

Route::get('/dashboard',[DashboardController::class,'index'])
->middleware('auth')->name('dashboard');

//Rota para Logout
Route::post('/logout',[UserController::class,'logout']);

//rota para Produtos
Route::resource('produtos', ProdutoController::class)->middleware(ProdutosMiddleware::class);

//visualização de um produto específico
Route::get('produtos/{produto}',[ProdutoController::class,'show'])
->middleware('auth')->name('produtos.show');

//rota para adicionar produto no carrinho
Route::post('carrinho/add/{produto}',[CarrinhoController::class,'add'])
->middleware('auth')->name('carrinho.add');

