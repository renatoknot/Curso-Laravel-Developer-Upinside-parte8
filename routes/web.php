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

Route::get('/', function () {
    $user = new stdClass();
    $user->name = 'Renato Santos';
    $user->birth = '1988-04-27';
    $user->email = 'renatoslip@hotmail.com';

    $alert = "<div style= 'background-color: red;'>Teste</div>";

    return view('front.home', [
        'user'=> $user,
        'alert' => $alert
    ]);
    // return view('front.home')->with(['user'  => $user]);//enviando um vetor de parametros pra view
    // return view('front.home')->with('user',  $user);//enviando um unico parametro pra view;
    //return view('front.home', compact('user'));//simplifica ja passando o indice e variavel
});
