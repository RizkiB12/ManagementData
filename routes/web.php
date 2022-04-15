<?php

use App\Http\Controllers\DataPegawaiController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'manajemendata', 'middleware' => 'auth'], function () {
    Route::get('/ppk', [DataPegawaiController::class, 'indexPPK'])->name('manajemendata.index');
    Route::get('/kpps', [DataPegawaiController::class, 'indexKPPS'])->name('manajemendata.index');
    Route::get('/pps', [DataPegawaiController::class, 'indexPPS'])->name('manajemendata.index');
});
