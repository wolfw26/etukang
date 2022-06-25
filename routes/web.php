<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\TukangController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\MaterialController;
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

Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.log');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');


Route::group(['prefix' => 'adm'], function () {
    Route::get('/', function () {
        return view('admin.home', [
            'title' => 'HOME'
        ]);
    })->middleware(['auth'])->name('admin.home');
    Route::get('/tukang/', [TukangController::class, 'index'])->name('tukang')->middleware(['auth']);
    Route::get('/tukang/del/{id}', [TukangController::class, 'trash'])->name('tukang.delete');
    Route::post('/tukang/', [TukangController::class, 'store'])->name('tukang.add');
    Route::get('/tukang/{tukang:id}', [TukangController::class, 'detail'])->name('tukang.detail');
    Route::get('/tukang/{tukang:id}/edit', [TukangController::class, 'edit'])->name('tukang.edit');

    Route::get('/proyek/', [ProyekController::class, 'index'])->name('proyek')->middleware(['auth']);
    Route::get('/proyek/{proyek}', [ProyekController::class, 'show'])->name('proyek.show');

    Route::get('/pekerja/', [PekerjaController::class, 'index'])->middleware(['auth']);

    Route::get('/client/', [ClientController::class, 'index'])->name('client')->middleware(['auth']);
    Route::get('/client/{client:id}', [ClientController::class, 'detail'])->name('client.detail');
    Route::post('/client/', [ClientController::class, 'store'])->name('client.add');
    Route::get('/client/d/{id}', [ClientController::class, 'trash'])->name('client.delete');
    Route::post('/client/e/{client:id}', [ClientController::class, 'edit'])->name('client.edit');

    // Route::get('/client/del/{client}', [ClientController::class, 'trash']);
    Route::get('/material/', [MaterialController::class, 'index'])->name('material')->middleware(['auth']);
    Route::get('/biaya/', function () {
        return view('admin.biaya', [
            'title' => 'HOME'
        ]);
    });
    Route::get('/pembayaran/', function () {
        return view('admin.pembayaran', [
            'title' => 'HOME'
        ]);
    })->middleware(['auth']);
});



Route::get('admin/proyek', [ProyekController::class, 'index']);

// ADMIN

// Route::get('/blog', [BlogController::class, 'index']);



// === User ===
// Route::get('/user', [userController::class, 'index']);
