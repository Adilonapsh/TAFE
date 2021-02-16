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
    return view('landingpage');
})->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('nodemcu', [App\Http\Controllers\SocketController::class, 'index'])->name('nodemcu');
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('app', function () {
        return view('layouts.app');
    });
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('socket', [App\Http\Controllers\SocketController::class, 'index']);

    Route::get('project', [App\Http\Controllers\ProjectController::class, 'showindex'])->name('project');
    Route::get('post', [App\Http\Controllers\ProjectController::class, 'index'])->name('viewnewpost');
    Route::post('post', [App\Http\Controllers\ProjectController::class, 'store'])->name('postnewpost');
    Route::get('post/edit/{id}', [App\Http\Controllers\ProjectController::class, 'edit'])->name('editpost');
    Route::post('post/update', [App\Http\Controllers\ProjectController::class, 'update'])->name('updatepost');
    Route::get('post/delete/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('deletepost');

    Route::get('/cctv', [App\Http\Controllers\CCTVController::class, 'index'])->name('viewcctv');
    Route::get('/cctv/create', [App\Http\Controllers\CCTVController::class, 'create'])->name('viewnewcctv');
    Route::post('/cctv/create', [App\Http\Controllers\CCTVController::class, 'store'])->name('postnewcctv');
    Route::get('/cctv/edit/{id}', [App\Http\Controllers\CCTVController::class, 'edit'])->name('editcctv');
    Route::post('/cctv/update', [App\Http\Controllers\CCTVController::class, 'update'])->name('updatecctv');
    Route::get('/cctv/delete/{id}', [App\Http\Controllers\CCTVController::class, 'destroy'])->name('deletecctv');
    Route::get('/video', [App\Http\Controllers\VideoController::class, 'index'])->name('viewvideo');
    // Route::get('/user', [App\Http\Controllers\EditUser::class, 'index']);
    Route::get('/profile', [App\Http\Controllers\EditUser::class, 'index'])->name('viewprofile');
    Route::post('/profile/upload', [App\Http\Controllers\EditUser::class, 'updateavatar'])->name('updateprofile');
});
Route::view('coba', 'coba');
Route::view('cobacctv', 'cobacctv');
Route::view('coba/setting', 'settings');
// Route::view('cctv', 'cctv');
Auth::routes();
Route::get('/unch', function () {
});
