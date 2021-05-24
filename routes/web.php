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

Route::get('/banner',[EventController::class,'index']);
Route::get('/addativos/create',[EventController::class, 'create']);

Route::post('edit/{id}', [EventController::class , 'update'])->name('edit');

Route::post('/addativos', [EventController::class, 'store']);

Route::get('/edit-ativos', [EventController::class, 'indexEdit']);

