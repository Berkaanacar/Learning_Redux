<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
#User Route
Route::prefix('user')->group(function () {
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update/{id?}', [UserController::class, 'update']);
    Route::delete('/delete/{id?}', [UserController::class, 'destroy']);
    Route::get('/list/{rowCount?}{page?}{orderBy?}{search?}', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/detail/{id}', [UserController::class, 'detail']);
});
#User detay Route
Route::prefix('userdetail')->group(function () {
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update/{id?}', [UserController::class, 'update']);
    Route::delete('/delete/{id?}', [UserController::class, 'destroy']);
    Route::get('/list/{rowCount?}{page?}{orderBy?}{search?}', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/detail/{id}', [UserController::class, 'detail']);
});
#Adres Route
Route::prefix('address')->group(function () {
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update/{id?}', [UserController::class, 'update']);
    Route::delete('/delete/{id?}', [UserController::class, 'destroy']);
    Route::get('/list/{rowCount?}{page?}{orderBy?}{search?}', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/detail/{id}', [UserController::class, 'detail']);
});
#Şirket/Firma Route
Route::prefix('company')->group(function () {
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update/{id?}', [UserController::class, 'update']);
    Route::delete('/delete/{id?}', [UserController::class, 'destroy']);
    Route::get('/list/{rowCount?}{page?}{orderBy?}{search?}', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/detail/{id}', [UserController::class, 'detail']);
});
#İletişim Route
Route::prefix('contact')->group(function () {
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update/{id?}', [UserController::class, 'update']);
    Route::delete('/delete/{id?}', [UserController::class, 'destroy']);
    Route::get('/list/{rowCount?}{page?}{orderBy?}{search?}', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/detail/{id}', [UserController::class, 'detail']);
});
#iş/Görev Route
Route::prefix('job')->group(function () {
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update/{id?}', [UserController::class, 'update']);
    Route::delete('/delete/{id?}', [UserController::class, 'destroy']);
    Route::get('/list/{rowCount?}{page?}{orderBy?}{search?}', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/detail/{id}', [UserController::class, 'detail']);
});
#Tanım Route
Route::prefix('defination')->group(function () {
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update/{id?}', [UserController::class, 'update']);
    Route::delete('/delete/{id?}', [UserController::class, 'destroy']);
    Route::get('/list/{rowCount?}{page?}{orderBy?}{search?}', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/detail/{id}', [UserController::class, 'detail']);
});
