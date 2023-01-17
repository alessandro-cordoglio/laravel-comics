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
    //logica
    $comics=config('comics');

    return view('homepage', compact('comics'));
});

//rotta x i comics
Route::get('/comic/{index}', function($index){
     //logica
    $comics=config('comics');
    $comic=$comics[$index];
    return view('show', compact('comic'));
})->name('show');
