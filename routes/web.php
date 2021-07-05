<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\LiveController;

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


Route::get('/trocarlive', [LiveController::class, 'indexTrocarLive'])->name('trocar-live');


Route::get('/', [LiveController::class, 'indexLive'])->name('index');
Route::post('/inicio', [EventController::class, 'inicio'])->name('inicio');

Route::get('/dashboard', function(){
    return redirect('/');
});

Route::get('/banner/{id}',[EventController::class,'index'])->name('banner');
Route::get('/bannerlive/{id}', [EventController::class , 'live'])->name('bannerlive');

Route::get('/addativos/create/{id}',[EventController::class, 'create'])->name('createativos');
Route::post('/addativos/{id}', [EventController::class, 'store'])->name('createativo');

Route::get('/createlive',[LiveController::class, 'indexLive']);
Route::get('/addlives/lives',[EventController::class, 'createLive']);
Route::post('/addlives',[LiveController::class,'addLive']);



Route::post('edit/{id}/{idlives}', [EventController::class , 'update'])->name('edit');

Route::post('delete/{id}', [EventController::class, 'delete'])->name('delete');

Route::get('/edit-ativos/{id}', [EventController::class, 'indexEdit'])->name('edit-ativos');

Route::get('/conta/{id}',[EventController::class, 'conta']);

Route::post('/pesquisadata/{id}', [EventController::class , 'busca'])->name('pesquisa');

Route::post('/pesquisaedit/{id}', [EventController::class , 'buscaedit'])->name('pesquisaedit');


