<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\RegisterController;

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

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/card', function () {
    return view('component.card.contact', [
        'title' => 'card'
    ]);
});
Route::get('/', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('home', [
            'title' => 'HOME'
        ]);
    });
    Route::get('/tukang', [TukangController::class, 'index'])->name('tukang');
    Route::get('/proyek', [ProyekController::class, 'index'])->name('proyek');
    Route::get('/proyek/{proyek}', [ProyekController::class, 'show']);
    Route::get('/pekerja', [PekerjaController::class, 'index']);
    Route::get('/client', [ClientController::class, 'index'])->name('client');
    Route::get('/client/{client}', [ClientController::class, 'index']);
    Route::get('/biaya', function () {
        return view('admin.biaya', [
            'title' => 'HOME'
        ]);
    });
    Route::get('/pembayaran', function () {
        return view('admin.pembayaran', [
            'title' => 'HOME'
        ]);
    });
});



Route::get('admin/proyek', [ProyekController::class, 'index']);

// ADMIN

// Route::get('/blog', [BlogController::class, 'index']);



// === User ===
// Route::get('/user', [userController::class, 'index']);
