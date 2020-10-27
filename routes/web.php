<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
    return view('home');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('Nodemcu', function () {
        return view('nodemcu');
    })->name('nodemcu');
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('app', function () {
        return view('layouts.app');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('socket', [App\Http\Controllers\SocketController::class, 'index']);

    Route::get('post', [App\Http\Controllers\ProjectController::class, 'index']);
    Route::post('post', [App\Http\Controllers\ProjectController::class, 'store']);
    Route::get('post/edit/{id}', [App\Http\Controllers\ProjectController::class, 'edit']);
    Route::post('post/update', [App\Http\Controllers\ProjectController::class, 'update']);
    Route::get('post/delete/{id}', [App\Http\Controllers\ProjectController::class, 'destroy']);

    Route::get('/cctv', [App\Http\Controllers\CCTVController::class, 'index']);
    Route::get('/cctv/create', [App\Http\Controllers\CCTVController::class, 'create']);
    Route::post('/cctv/create', [App\Http\Controllers\CCTVController::class, 'store']);
    Route::get('/cctv/edit/{id}', [App\Http\Controllers\CCTVController::class, 'edit']);
    Route::post('/cctv/update', [App\Http\Controllers\CCTVController::class, 'update']);
    Route::get('/cctv/delete/{id}', [App\Http\Controllers\CCTVController::class, 'destroy']);
});
Route::view('coba', 'coba');
// Route::view('cctv', 'cctv');
Auth::routes();
