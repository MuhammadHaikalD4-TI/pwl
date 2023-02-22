<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HoumController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
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

Route::get('/',  [HoumController::class, 'index']);

Route::get('/category/{category_name}', [ProductController::class, 'index']);

Route::get('/news/{news_name}', [NewsController::class, 'index']);

Route::get('/program/{program_name}', [ProgramController::class, 'index']);

Route::get('/about-us', [AboutUsController::class, 'index']);

Route::resource('/contact-us', ContactUsController::class);