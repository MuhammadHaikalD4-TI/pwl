<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HoumController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArtikelModelController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\MatkulController;

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

// Route::get('/', [HomeController::class, 'index']);
// Route::prefix('user')->group(function () {
//     Route::get('/name/{user}', [HomeController::class, 'userByUsername']);
//     Route::get('/id/{id}', [HomeController::class, 'userByUserID']);
//     });
Auth::routes();

Route::get('logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function () {

    Route::get('/',  [HomesController::class, 'index']);

    Route::get('/profile', [ProductController::class, 'index']);

    Route::get('/category/{category_name}', [ProductController::class, 'index']);

    Route::get('/news/{news_name}', [NewsController::class, 'index']);

    Route::get('/program/{program_name}', [ProgramController::class, 'index']);

    Route::get('/about-us', [AboutUsController::class, 'index']);

    Route::resource('/contact-us', ContactUsController::class);

    Route::get('/artikel', [ArtikelModelController::class, 'index']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/hobi', [HobiController::class, 'index']);

    Route::get('/keluarga', [KeluargaController::class, 'index']);

    Route::get('/matakuliah', [MatkulController::class, 'index']);
});
