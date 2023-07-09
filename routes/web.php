<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/ruangan', function () {
    return view('ruangan');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reservasi', function () {
    return view('reservasi');
});

Route::get('/',[IndexController::class,'index']);

// Route::get('/artikel', function () {
//     return view('artikel');
// });

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'authenticating']);

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/artikel/add', [DashboardController::class, 'artikelAdd']);
    Route::get('/dashboard/artikel', [DashboardController::class, 'show']);

    // CRUD Article
    Route::post('/dashboard/artikel/add', [ArticleController::class, 'store']);
    Route::get('/dashboard/artikel/{id}', [ArticleController::class, 'detail']);
    Route::post('/dashboard/artikel/{id}/edit', [ArticleController::class, 'edit']);
    Route::delete('/dashboard/artikel/{id}/delete', [ArticleController::class, 'delete']);
    Route::delete('/dashboard/artikel/{id}/arsip', [ArticleController::class, 'arsip']);
    Route::get('/dashboard/artikel/{id}/restore', [ArticleController::class, 'restore']);

    Route::get('/dashboard/arsip/artikel', [ArticleController::class, 'dataarsip']);


    Route::get('/dashboard/logout', [AuthController::class, 'logout']);
});


//PUBLIC 
Route::get('/artikel',[ArticleController::class,'show']);
Route::get('/artikel/{heading}',[ArticleController::class,'content']);