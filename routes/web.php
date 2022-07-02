<?php

use App\Models\Rab;
use App\Models\Client;
use App\Models\Proyek;
use App\Models\Tukang;
use App\Models\DataAhs;
use App\Models\Pekerja;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AhsController;
use App\Http\Controllers\RabController;
use App\Http\Controllers\AhspController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\TukangController;
use App\Http\Controllers\DataAhsController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\AhspdataController;
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
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'login'])->name('login.log');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');


Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'adm'], function () {

        Route::get('/', function () {
            $proyek = Proyek::all();
            $tukang = Tukang::all();
            $client = Client::all();
            $pekerja = Pekerja::all();
            return view('admin.home', [
                'title' => 'HOME',
                'proyek' => $proyek->count(),
                'tukang' => $tukang->count(),
                'client' => $client->count(),
                'pekerja' => $pekerja->count(),
            ]);
        })->middleware(['auth'])->name('admin.home');
        Route::get('/tukang/', [TukangController::class, 'index'])->name('tukang');
        Route::get('/tukang/del/{id}', [TukangController::class, 'trash'])->name('tukang.delete');
        Route::post('/tukang/', [TukangController::class, 'store'])->name('tukang.add');
        Route::get('/tukang/{tukang:id}', [TukangController::class, 'detail'])->name('tukang.detail');
        Route::get('/tukang/{tukang:id}/edit', [TukangController::class, 'edit'])->name('tukang.edit');
        Route::put('/tukang/{tukang:id}', [TukangController::class, 'update'])->name('tukang.update');



        // Proyek
        Route::get('/proyek/', [ProyekController::class, 'index'])->name('proyek');
        Route::post('/proyek/', [ProyekController::class, 'store'])->name('proyek.add');
        Route::get('/proyek/{proyek}', [ProyekController::class, 'show'])->name('proyek.show');
        Route::get('/proyek/del/{id}', [ProyekController::class, 'trash'])->name('proyek.delete');
        // renovasi
        // Route::get('/renovasi/' [])
        //Pekerja
        Route::get('/pekerja/', [PekerjaController::class, 'index']);
        // Client
        Route::get('/client/', [ClientController::class, 'index'])->name('client');
        Route::get('/client/{client:id}', [ClientController::class, 'detail'])->name('client.detail');
        Route::post('/client/', [ClientController::class, 'store'])->name('client.add');
        Route::get('/client/d/{id}', [ClientController::class, 'trash'])->name('client.delete');
        Route::get('/client/{client:id}/edit', [ClientController::class, 'edit'])->name('client.edit');
        Route::put('/client/{client:id}', [ClientController::class, 'update'])->name('client.update');

        // material

        Route::get('/material/', [MaterialController::class, 'index'])->name('material');
        Route::post('/material/{material:id}/edit', [MaterialController::class, 'edit'])->name('material.edit');
        Route::post('/material/', [MaterialController::class, 'store'])->name('material.add');
        Route::get('/material/d/{id}', [MaterialController::class, 'delete'])->name('material.delete');

        //AHS
        Route::get('/ahsp/', [AhspController::class, 'index'])->name('ahsp');
        Route::post('/ahsp/', [AhspController::class, 'store'])->name('ahsp.add');
        Route::get('/ahsp/{ahsp}', [AhspController::class, 'detail'])->name('ahsp.detail');
        Route::get('ahsp/{id}/d', [AhspController::class, 'delete'])->name('ahsp.delete');
        Route::get('ahsp/{id}/edit', [AhspController::class, 'edit'])->name('ahsp.edit');
        Route::post('ahsp/ahspdata/', [AhspController::class, 'ahspdata'])->name('ahsp.dataahs');
        Route::post('ahspdata/{id}', [AhspdataController::class, 'store'])->name('ahspdata.add');
        Route::get('ahspdata/d/{id}', [AhspdataController::class, 'delete'])->name('ahspdata.delete');

        // RAB
        Route::get('/rab/', [RabController::class, 'index'])->name('rab');

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
});



Route::get('/client/', function () {
    return view('usertemplate', [
        'title' => 'Client'
    ]);
});

// ADMIN

// Route::get('/blog', [BlogController::class, 'index']);



// === User ===
// Route::get('/user', [userController::class, 'index']);
