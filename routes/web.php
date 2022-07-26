<?php

use app\Http\Middleware;
use App\Models\Client;
use App\Models\Proyek;
use App\Models\Tukang;
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
use App\Http\Livewire\Absen\Absensi;
use App\Http\Livewire\Absendata;
use App\Http\Livewire\Admin\Home;
use App\Http\Livewire\Alat\Alathome;
use App\Http\Livewire\Alat\Alatin as AlatAlatin;
use App\Http\Livewire\Alat\Alatindex as AlatAlatindex;
use App\Http\Livewire\Alat\Alatrusak;
use App\Http\Livewire\Alat\Alatsewa as AlatAlatsewa;
use App\Http\Livewire\Alatindex;
use App\Http\Livewire\Cetak\Alat\Masuk as AlatMasuk;
use App\Http\Livewire\Cetak\Material\All;
use App\Http\Livewire\Cetak\Material\Masuk;
use App\Http\Livewire\Client\Client as ClientClient;
use App\Http\Livewire\Client\Proyekadd;
use App\Http\Livewire\Client\Rab\RabHome;
use App\Http\Livewire\DataAhs;
use App\Http\Livewire\Jabatans;
use App\Http\Livewire\Konfirmasi;
use App\Http\Livewire\Laporan\GajiPekerja;
use App\Http\Livewire\Laporan\Laporanalat;
use App\Http\Livewire\Laporan\LaporanMaterial;
use App\Http\Livewire\Laporan\Pembayaransewa;
use App\Http\Livewire\MaterialIn;
use App\Http\Livewire\MaterialOut;
use App\Http\Livewire\Pekerja\PekerjaIndex;
use App\Http\Livewire\Penggajian\Datagaji;
use App\Http\Livewire\StockMaterial;
use App\Http\Livewire\Tukang as LivewireTukang;
use App\Models\Alatin;
use App\Models\Alatsewa;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',  function () {
    return view('landing.index', [
        'title' => 'HOME'
    ]);
});
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.log');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');


Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {

    Route::group(['prefix' => 'adm'], function () {

        Route::get('/', Home::class)->name('admin.home');
        Route::get('/tukang/', [TukangController::class, 'index'])->name('tukang');
        Route::get('/tukang/del/{id}', [TukangController::class, 'trash'])->name('tukang.delete');
        Route::post('/tukang/', [TukangController::class, 'store'])->name('tukang.add');
        Route::get('/tukang/{tukang:id}', [TukangController::class, 'detail'])->name('tukang.detail');
        Route::get('/tukang/{tukang:id}/edit', [TukangController::class, 'edit'])->name('tukang.edit');
        Route::put('/tukang/{tukang:id}', [TukangController::class, 'update'])->name('tukang.update');



        // Proyek
        Route::get('/proyek/', [ProyekController::class, 'index'])->name('proyek');
        Route::post('/proyek/', [ProyekController::class, 'store'])->name('proyek.add');
        Route::get('/proyek/rab/{proyek:id}', [ProyekController::class, 'rab'])->name('proyek.rab');
        Route::get('/proyek/{proyek:id}', [ProyekController::class, 'show'])->name('proyek.show');
        Route::get('/proyek/del/{id}', [ProyekController::class, 'trash'])->name('proyek.delete');
        Route::post('/proyek/tambahTukang/{proyek}', [ProyekController::class, 'tambahTukang'])->name('proyek.tambahTukang');
        // renovasi
        // Route::get('/renovasi/' [])

        // konfirmasi
        Route::get('/konfirmasi/{client:id}/{rab:id}', Konfirmasi::class)->name('konfirmasi');

        //Pekerja
        Route::get('/pekerja/', [PekerjaController::class, 'index'])->name('pekerja');
        Route::post('/pekerja/', [PekerjaController::class, 'store'])->name('pekerja.create');
        Route::get('/pekerja/{id}/d', [PekerjaController::class, 'delete'])->name('pekerja.delete');
        Route::get('/pekerja/{id}/detail', [PekerjaController::class, 'detail'])->name('pekerja.detail');

        //
        Route::get('/jabatan/', Jabatans::class)->name('jabatan');
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
        Route::get('/material/cetak', [MaterialController::class, 'cetakMaterial'])->name('material.cetakall');
        Route::get('/material/cetak/{param}', [MaterialController::class, 'Materialin'])->name('materialin.cetak');

        // --- LIVEWIRE ----
        //  -- LIVEWIRE --
        //   - LIVEWIRE -
        // Tukang
        Route::get('tukang', LivewireTukang::class)->name('tukang.akun');
        // Material-in Livewire
        Route::get('materialin', MaterialIn::class)->name('materialin');
        // Material-keluar Livewire
        Route::get('materialout', MaterialOut::class)->name('materialout');
        // Stok Material Livewire
        Route::get('stokMaterial', StockMaterial::class)->name('stokMaterial');
        // LaporanMaterial
        Route::get('laporanMaterial', LaporanMaterial::class)->name('laporanMaterial');
        // Cetak MATERIAL ALL
        Route::get('cetakmaterial/all', All::class)->name('cetakmaterial.all');
        // Cetak MATERIAL MASUK
        Route::get('cetakmaterial/masuk/tglawl/{awal}/tglakhr/{akhir}', Masuk::class)->name('cetakmaterial.masuk');
        Route::get('cetakalat/masuk/tglawl/{awal}/tglakhr/{akhir}', AlatMasuk::class)->name('cetakalat.masuk');

        // LAPORAN ALAT
        Route::get('laporanAlat', Laporanalat::class)->name('laporanAlat');
        Route::get('laporanGaji', GajiPekerja::class)->name('laporanGaji');
        // LAPORAN SEWA ALAT
        Route::get('laporanPembayaranSewa', Pembayaransewa::class)->name('laporanPembayaranSewa');

        // dataGaji
        Route::get('dataGaji', Datagaji::class)->name('datagaji');

        // STOK MATERIAL
        Route::get('/stock/', StockMaterial::class)->name('stock.index');

        // Absen
        Route::get('/absen/', Absensi::class)->name('absensi');
        Route::get('absen/index/', Absendata::class)->name('absen.index');

        //ALAT
        Route::get('/alat/', Alathome::class)->name('alat');
        Route::get('/alat/masuk', AlatAlatin::class)->name('alat.masuk');
        Route::get('/alat/sewa', AlatAlatsewa::class)->name('alat.sewa');
        Route::get('/alat/rusak', Alatrusak::class)->name('alat.rusak');

        //AHS
        Route::get('/ahsp/', [AhspController::class, 'index'])->name('ahsp');
        Route::post('/ahsp/', [AhspController::class, 'store'])->name('ahsp.add');
        // Route::get('/ahsp/{ahsp}', [AhspController::class, 'detail'])->name('ahsp.detail');
        Route::get('/ahsp/{ahsp}', DataAhs::class)->name('ahsp.detail');
        Route::get('ahsp/{id}/d', [AhspController::class, 'delete'])->name('ahsp.delete');
        Route::post('ahsp/{id}/edit', [AhspController::class, 'edit'])->name('ahsp.edit');
        Route::post('ahsp/dataahsp/', [AhspController::class, 'ahspdata'])->name('ahsp.dataahsp');
        Route::post('ahspdata/{id}', [AhspdataController::class, 'store'])->name('ahspdata.add');
        Route::get('ahspdata/d/{id}', [AhspdataController::class, 'delete'])->name('ahspdata.delete');

        // RAB
        Route::get('/rab/', [RabController::class, 'index'])->name('rab.index');
        Route::get('/rab/{id}/confirm/', [RabController::class, 'konfirmasi'])->name('rab.konfirmasi');
        Route::post('/rab/', [RabController::class, 'store'])->name('rab.store');
        Route::get('/rab/{rab:id}/d', [RabController::class, 'delete'])->name('rab.delete');
        Route::get('/rab/{rab:id}', [RabController::class, 'detail'])->name('rab.view');
        Route::get('/rab/d/{rab:id}/{datarab:id}/d', [RabController::class, 'trash'])->name('rab.trash');
        Route::put('/rab/{rab:id}/{datarab:id}/u', [RabController::class, 'update'])->name('rab.update');
        Route::post('/rab/add/{id}', [RabController::class, 'Tambah'])->name('rab.add');

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


Route::group(['middleware' => ['auth', 'CekLevel:client']], function () {
    Route::group(['prefix' => 'client'], function () {
        // Route::get('/', function () {
        //     return view('usertemplate', [
        //         'title' => 'Client'
        //     ]);
        // })->name('client.home');
        Route::get('/', ClientClient::class)->name('client.home');
        Route::get('/rab/', RabHome::class)->name('rab.home');
        Route::get('/proyek/', Proyekadd::class)->name('client.proyek');
    });
});

Route::group(['middleware' => ['auth', 'CekLevel:ketua']], function () {
    Route::group(['prefix' => 'tukang'], function () {
        Route::get('/', PekerjaIndex::class)->name('pekerja.index');
    });
});
// ADMIN

// Route::get('/blog', [BlogController::class, 'index']);



// === User ===
// Route::get('/user', [userController::class, 'index']);
