<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'inicio']);

Route::get('/dashboard', function(){
    return redirect('/');
});

Route::get('/banner',[EventController::class,'index']);
Route::get('/bannerlive', [EventController::class , 'live']);

Route::get('/addativos/create',[EventController::class, 'create']);
Route::post('/addativos', [EventController::class, 'store']);


Route::get('/addlives/lives',[EventController::class, 'createLive']);
Route::post('/addlives',[EventController::class,'storelive']);



Route::post('edit/{id}', [EventController::class , 'update'])->name('edit');

Route::post('delete/{id}', [EventController::class, 'delete'])->name('delete');

Route::get('/edit-ativos', [EventController::class, 'indexEdit']);

Route::get('/conta',[EventController::class, 'conta']);

Route::post('/pesquisadata', [EventController::class , 'busca'])->name('pesquisa');

Route::post('/pesquisaedit', [EventController::class , 'buscaedit'])->name('pesquisaedit');


