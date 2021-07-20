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

Route::get('/home',function (){
    return view('home');
});

Route::get('/produto', 'App\Http\Controllers\ProdutoController@create') 
->name('listar_produtos');
Route::get('/categoria', 'App\Http\Controllers\CategoriaController@index') 
    ->name('listar_categorias');


 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('home');
Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/home');
});
Route::get('/admin','App\Http\Controllers\AuthController@dashboard')
    ->name('home');

    Route::get('/show','App\Http\Controll;AuthController@show')
    ->name('admin.show');
    Route::post('/admin/show/do','App\Http\Controllers\AuthController@show')
    ->name('admin.show.do');
        