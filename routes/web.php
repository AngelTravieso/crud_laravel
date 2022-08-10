<?php

use Illuminate\Support\Facades\Route;

use App\Mail\RegisterMailable;
use Illuminate\Support\Facades\Mail;

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

// CRUD
Route::get('/', 'UserController@index');
Route::post('/agregar_usuario', 'UserController@add_user');
Route::get('/listar_usuarios', 'UserController@get_users');
Route::get('/eliminar_usuario_form', 'UserController@delete_user_form');
Route::get('/editar_usuario_form', 'UserController@edit_user_form');
Route::put('/editar_usuario', 'UserController@edit_user');
Route::delete('/eliminar_usuario', 'UserController@delete_user');