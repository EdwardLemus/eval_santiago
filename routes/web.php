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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuarios', function () {
    return view('create');
});
Route::post('/usuarios', 'UsuarioController@store')->name('usuarios.store');

Route::get('/mostar', function () {
    return view('index');
});
Route::post('/index', 'UserController@index')->name('usuarios.index');
