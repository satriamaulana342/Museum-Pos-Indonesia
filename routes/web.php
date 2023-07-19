<?php


use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoriesController;

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

Route::get('/',[IndexController::class,'indexArtikel']);
Route::get('/sejarah',[IndexController::class,'indexSejarah']);
Route::get('/ruangan',[IndexController::class,'indexRuangan']);
Route::get('/profil',[IndexController::class, 'indexProfile']);

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

    //sejarah
    Route::get('/dashboard/sejarah', [HistoriesController::class,'index']);
    Route::get('/dashboard/sejarah/add',[HistoriesController::class, 'tambah']);
    Route::post('/dashboard/sejarah/add',[HistoriesController::class, 'store']);
    Route::get('/dashboard/sejarah/{id}',[HistoriesController::class, 'detail']);
    Route::post('/dashboard/sejarah/{id}/edit', [HistoriesController::class, 'edit']);
    Route::delete('/dashboard/sejarah/{id}/delete', [HistoriesController::class, 'delete']);
    Route::delete('/dashboard/sejarah/{id}/arsip', [HistoriesController::class, 'arsip']);
    Route::get('/dashboard/sejarah/{id}/restore', [HistoriesController::class, 'restore']);
    Route::get('/dashboard/arsip/sejarah', [HistoriesController::class, 'dataarsip']);

    //Ruangan
    Route::get('/dashboard/ruangan',[RoomController::class,'index']);
    Route::get('/dashboard/ruangan/add',[RoomController::class, 'tambah']);
    Route::post('/dashboard/ruangan/add',[RoomController::class, 'store']);
    Route::get('/dashboard/ruangan/{id}',[RoomController::class, 'detail']);
    Route::post('/dashboard/ruangan/{id}/edit', [RoomController::class, 'edit']);
    Route::delete('/dashboard/ruangan/{id}/delete', [RoomController::class, 'delete']);
    Route::delete('/dashboard/ruangan/{id}/arsip', [RoomController::class, 'arsip']);
    Route::get('/dashboard/ruangan/{id}/restore', [RoomController::class, 'restore']);
    Route::get('/dashboard/arsip/ruangan', [RoomController::class, 'dataarsip']);
    Route::get('/dashboard/profil', [ProfileController::class,'profil']);
    Route::post('/dashboard/profil/edit', [ProfileController::class, 'edit']);


    Route::get('/dashboard/logout', [AuthController::class, 'logout']);
});


//PUBLIC 
Route::get('/artikel',[ArticleController::class,'show']);
Route::get('/artikel/{slug}',[ArticleController::class,'content']);
Route::get('/sejarah/{slug}',[HistoriesController::class,'content']);
Route::get('/ruangan/{slug}',[RoomController::class,'content']);


//Tes Route
// Route::get('/tiny',[ArticleController::class,'tiny']);
// Route::post('/tiny',[ArticleController::class,'test']);

 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     Lfm::routes();
 });