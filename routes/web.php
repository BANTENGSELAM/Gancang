<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\masyarakatController;
use App\Http\Controllers\pemerintahdesaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('index');
});

// Route::get('/masyarakat', function () {
//     return view('masyarakat');
// });

Route::get('/masyarakat', [masyarakatController::class, 'masyarakat'])->name('masyarakat');
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
});

Route::get('/beritapublik', [BeritaController::class, 'indexPublik'])->name('beritapublik');
Route::get('/beritashowpublik/{id}', [BeritaController::class, 'beritashowpublik'])->name('beritashowpublik');


Route::get('/perekonomian', function () {
    return view('perekonomian');
});
Route::get('/lkdikd', function () {
    return view('lkdikd');
});

Route::get('/grafik/edit', [GrafikController::class, 'edit'])->name('grafik.edit');
Route::put('/grafik/update', [GrafikController::class, 'update'])->name('grafik.update');
