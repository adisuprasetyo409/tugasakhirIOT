<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout.templete');
});
// Route::get('/adminn', [AdminController::class, 'halamanadmin'])->name('adminn.halamanadmin');

Route::get('/adminn', function () {
    return view('adminn.halamanadmin');
});
