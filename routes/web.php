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
// praktikum 2.3
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);
//================================================================================================
//praktikum 3
// Halaman tentang Home
Route::get('/', function () { return 'Home Page!'; });

// Halaman tentang Products
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', function () { return 'marbel-edu-games';              });
    Route::get('/marbel-and-friends-kids-games', function () { return 'marbel-and-friends-kids-games'; });
    Route::get('/riri-story-books', function () { return 'riri-story-books';              });
    Route::get('/kolak-kids-songs', function () { return 'kolak-kids-songs';              });
});

// Halaman tentang News
Route::get('/news'       , function (){ return 'news page';      });
Route::get('/news/{slug}', function ($NewsTopic){ return 'News Topic: ' . $NewsTopic; });

// Halaman tentang Program
Route::prefix('/program')->group(function () {
    Route::get('/karir' , function () { return 'karir';              });
    Route::get('/magang' , function () { return 'magang';             });
    Route::get('/kunjungan-industri', function () { return 'kunjungan-industri'; });
});

// Halaman tentang About Us
Route::get('/about-us', function () { return 'about-us'; });

// Halaman tentang Contact Us
Route::resource('contact-us', function () { return 'resources Contact Us'; });