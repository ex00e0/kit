<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', [PageController::class , 'index'])->name('index');
Route::get('/index_sfs', [PageController::class , 'index_sfs'])->name('index_sfs');


Route::get('/login', [PageController::class , 'login_show'])->name('login_show');


Route::get('/admin/index/{id?}', [PageController::class , 'admin_index'])->name('admin_index');

// Route::get('/login_show', [PageController::class, 'login_show'])->name('login_show');
Route::post('/login', [PageController::class, 'login'])->name('login');
Route::get('/reg_show', [PageController::class, 'reg_show'])->name('reg_show');
Route::post('/reg', [PageController::class, 'reg'])->name('reg');

Route::get('/logout', [PageController::class, 'logout'])->name('logout');


Route::get('/my_appls', [PageController::class, 'my_appls'])->name('my_appls');
Route::get('/send_appl/{id}', [PageController::class, 'send_appl'])->name('send_appl');
Route::post('/send_appl_db', [PageController::class, 'send_appl_db'])->name('send_appl_db');

Route::get('/all_appls', [PageController::class, 'all_appls'])->name('all_appls');
Route::get('/all_tours', [PageController::class, 'all_tours'])->name('all_tours');
Route::get('/create_tour', [PageController::class, 'create_tour'])->name('create_tour');
Route::post('/create_tour_db', [PageController::class, 'create_tour_db'])->name('create_tour_db');

Route::post('/change_status', [PageController::class, 'change_status'])->name('change_status');



 