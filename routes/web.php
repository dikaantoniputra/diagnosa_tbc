<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::group(['prefix' => 'admin', 'middleware' => ['guest']], function () { 

    Route::get('/', function () {      
        return view('admin.page.index');
    })->name('admin.dashboard');

    Route::resource('user', UserControler::class);


});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin', function () {
        
    return view('page.index');
    })->name('admin.dashboard');

});

Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('guest');


Route::get('/pelajaran', [PelajaranController::class, 'index'])->name('pelajaran.index');
Route::resource('pelajaran', PelajaranController::class);