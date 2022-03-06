<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//================================================================================================

//praktikum 1
// Route::get('/', function ($id) {
//     echo "Selamat Datang";
// });

// Route::get('/about',function() {
//     echo"NIM :2041720250
//          Nama :Ahmad alfaruq
//          Kelas : TI-2D";
// });
// Route::get('/articles/{id}', function ($id) {
//     echo "ID Artikel saat ini : $id";
// });
//================================================================================================
//praktikum 2.2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);
//================================================================================================
//praktikum 2.3
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);