<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StocksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|`
*/

Route::get('/', [PagesController::class, 'login']);

Auth::routes(['register' => false]);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [PagesController::class, 'home']);

Route::get('/viewStock', [StocksController::class, 'index']);
Route::get('/create', [StocksController::class, 'create']);
Route::post('/create', [StocksController::class, 'store']);
Route::delete('/viewStock/{stock}', [StocksController::class, 'destroy']);
Route::get('/edit/{stock}', [StocksController::class, 'edit']);
Route::patch('/edit/{stock}', [StocksController::class, 'update']);






Route::get('/notif', function () {
    return view('notif');
});

Route::get('/setting', function () {
    return view('setting');
});



