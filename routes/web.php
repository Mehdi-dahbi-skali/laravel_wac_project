<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WacController;

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



Route::get('/',[WacController::class, 'acueil'])->name('acueil');

Route::get('/admin',[WacController::class, 'admin'])->name('admin');

Route::post('/admin/createNews',[WacController::class, 'createNews'])->name('createNews');

Route::post('/admin/createInpNews',[WacController::class, 'createInpNews'])->name('createInpNews');

Route::post('/admin/nextMatch',[WacController::class, 'nextMatch'])->name('nextMatch');

Route::post('/admin/info',[WacController::class, 'info'])->name('info');

Route::post('/',[WacController::class, 'contact'])->name('contact');