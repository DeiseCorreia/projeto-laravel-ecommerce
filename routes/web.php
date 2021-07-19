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
    ->name('listar_produtos');


 

