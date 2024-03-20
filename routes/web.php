<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AutheticationController;
use App\Http\Controllers\UrlController;
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

Route::controller(AutheticationController::class)->group(function () {
    Route::get('/register', 'register')->name('home.register');
    Route::post('/register', 'registerUser');
    Route::get('/login',  'login')->name('home.login');
    Route::post('/login',  'loginUser');
    Route::post('/user/logout', 'logoutUser')->name('logout');
});

Route::controller(FrontendController::class)->group(function () {
    Route::get('/url/create', 'create')->name('url.create');
    Route::post('/url/create', 'store')->name('url.store')->middleware('auth');
});

Route::controller(UrlController::class)->group(function () {
    Route::middleware('auth')->group(function (){
    Route::prefix('/admin',)->group(function () {
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/url/index', 'index')->name('admin.url.index');
    Route::get('/url/create', 'create')->name('admin.url.create');
    Route::post('/url/create', 'storeBackend')->name('admin.url.store');
    Route::get('/url/{id}/view', 'view')->name('admin.url.view');
    Route::get('/url/{id}/edit', 'edit')->name('admin.url.update');
    Route::post('/url/{id}/edit', 'update');
    Route::post('/url/{id}/delete', 'destroy')->name('admin.url.destroy');
    Route::get('/{short_url}','redirect');
});
});
});

