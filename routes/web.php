<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\userController;

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

// Route::get('/about', function () {
//     return view('welcome');
// });

// === ADMIN ====
Route::get('/', function () {
    return view('home', [
        'title' => 'HOME'
    ]);
});
Route::get('/card', function () {
    return view('component.card.contact', [
        'title' => 'CARD'
    ]);
});

Route::get('/service', function () {
    return view('service', [
        'title' => 'SERVICE'
    ]);
});
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'KONTAK'
    ]);
});
Route::get('/product', function () {
    return view('product', [
        'title' => 'PRODUK'
    ]);
});
// === User ===
Route::get('/user', [userController::class, 'index']);
