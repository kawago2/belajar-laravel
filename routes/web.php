<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('hello', function () {
    return 'Hello World';
});

Route::get('belajar', function () {
    return view('belajar');
});

Route::get('template', function () {
    return view('template');
});

Route::get('edit', function () {
    return view('edit');
});

// Route::get('table', function () {
//     $barang = ['kursi', 'meja', 'buku', 'lampu', 'kaca', 'pensil', 'penghapus', 'pulpen', 'penggaris', 'buku tulis'];
//     return view('table', compact('barang'));
// });

Route::get('create', function () {
    return view('create');
});

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);
Auth::routes();

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahdatasiswa', [SiswaController::class, 'create']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



























// Route::get('val/{var}', function ($var) {
//     return 'Nilai Saya Adalah ' . $var;
// });

// Route::get('tambah/{var1}/{var2}', function ($var1, $var2) {
//     return 'Hasil Penjumlahan Dari ' . $var1 . ' + ' . $var2 . ' = ' . ($var1 + $var2);
// });

// Route::get('kurang/{var1}/{var2}', function ($var1, $var2) {
//     return 'Hasil Pengurangan Dari ' . $var1 . ' - ' . $var2 . ' = ' . ($var1 - $var2);
// });

// Route::get('kali/{var1}/{var2}', function ($var1, $var2) {
//     return 'Hasil Perkalian Dari ' . $var1 . ' * ' . $var2 . ' = ' . ($var1 * $var2);
// });

// Route::get('bagi/{var1}/{var2}', function ($var1, $var2) {
//     return 'Hasil Pengurangan Dari ' . $var1 . ' / ' . $var2 . ' = ' . ($var1 / $var2);
// });

// Route::post('users/{id}', function ($id) {

// });

// Route::put('users/{id}', function ($id) {

// });

// Route::delete('users/{id}', function ($id) {

// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
