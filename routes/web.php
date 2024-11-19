<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\masyarakatController;
use App\Http\Controllers\pemerintahdesaController;
use App\Http\Controllers\PopulationDataController;
use App\Http\Controllers\StatistikPendudukController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('index');
});

// Route::get('/masyarakat', function () {
//     return view('masyarakat');
// });

Route::get('/masyarakat', [PopulationDataController::class, 'masyarakat'])->name('masyarakat');
Route::get('/pemerintahdesa', [pemerintahdesaController::class, 'pemerintahdesa'])->name('pemerintahdesa');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::post('store', [NewsController::class, 'store'])->name('news.store');
Route::get('{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('{id}', [NewsController::class, 'update'])->name('news.update');
Route::delete('{id}', [NewsController::class, 'destroy'])->name('news.destroy');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Control Keuangan
    Route::get('keuangan', [KeuanganController::class, 'index'])->name('keuangan.index'); // Menampilkan daftar
    Route::get('keuangan/create', [KeuanganController::class, 'create'])->name('keuangan.create'); // Formulir buat
    Route::post('keuangan', [KeuanganController::class, 'store'])->name('keuangan.store'); // Menyimpan data baru
    Route::get('keuangan/{keuangan}/edit', [KeuanganController::class, 'edit'])->name('keuangan.edit'); // Formulir edit
    Route::put('keuangan/{keuangan}', [KeuanganController::class, 'update'])->name('keuangan.update'); // Memperbarui data
    Route::delete('keuangan/{keuangan}', [KeuanganController::class, 'destroy'])->name('keuangan.destroy'); // Menghapus data
});

require __DIR__.'/auth.php';

Route::get('/dashboard', [BeritaController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/grafikdesa', [BeritaController::class, 'index'])->middleware(['auth', 'verified'])->name('grafikdesa');




Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    // // Atur Grafik
    // Route::get('/grafikdesa', [BeritaController::class, 'getGrafik'])->name('grafikdesa.update');
    // Route::post('/grafikdesa', [BeritaController::class, 'updateGrafik'])->name('grafikdesa.update');
});

Route::get('/beritapublik', [BeritaController::class, 'indexPublik'])->name('beritapublik');
Route::get('/beritashowpublik/{id}', [BeritaController::class, 'beritashowpublik'])->name('beritashowpublik');


Route::get('/perekonomian', function () {
    return view('perekonomian');
});



//lkdikd
Route::get('lkdikd', [KeuanganController::class,'lkdikd'])->name('lkdikd');



// Route untuk menampilkan daftar data (READ)
Route::get('/population', [PopulationDataController::class, 'index'])->name('population.index');

// Route untuk menampilkan form tambah data (CREATE)
Route::get('/population/create', [PopulationDataController::class, 'create'])->name('population.create');

// Route untuk menyimpan data baru ke database (STORE)
Route::post('/population', [PopulationDataController::class, 'store'])->name('population.store');

// Route untuk menampilkan form edit data tertentu (EDIT)
Route::get('/population/{populationData}/edit', [PopulationDataController::class, 'edit'])->name('population.edit');

// Route untuk mengupdate data tertentu di database (UPDATE)
Route::put('/population/{populationData}', [PopulationDataController::class, 'update'])->name('population.update');

// Route untuk menghapus data tertentu dari database (DELETE)
Route::delete('/population/{populationData}', [PopulationDataController::class, 'destroy'])->name('population.destroy');