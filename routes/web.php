<?php

use App\Http\Controllers\KonterHpController;
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

// Route::get('/', function () {
//     return view('admin.index');
// });

Route::get('/konter_hp', [KonterHpController::class, 'index'])->name('konter_hp.index');
Route::get('/konter_hp/add', [KonterHpController::class, 'create'])->name('konter_hp.create');
Route::post('/konter_hp/store', [KonterHpController::class, 'store'])->name('konter_hp.store');
Route::get('/konter_hp/edit/{id}', [KonterHpController::class, 'edit'])->name('konter_hp.edit');
Route::post('konter_hp/update/{id}', [KonterHpController::class, 'update'])->name('konter_hp.update');
Route::post('/konter_hp/delete/{id}', [KonterHpController::class, 'delete'])->name('konter_hp.delete');
