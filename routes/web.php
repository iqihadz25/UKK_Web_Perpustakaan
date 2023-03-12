<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/books/detailBuku/{id}', [DashboardController::class, 'detail'])->name('books.detail');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('buku', BookController::class);
    Route::get('/export-buku', [BookController::class, 'export_excel'])->name('export');
    Route::get('/export-buku/pdf', [BookController::class, 'exportpdf'])->name('export.pdf');
    
});

Auth::routes();

