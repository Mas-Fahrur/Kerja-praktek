<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', [MenuController::class, 'showMenuKatalog'])->name('katalog.menu');

Route::get('/admin/login', [UserController::class, 'showHalamanLogin'])->name('admin.show-login');
Route::post('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
Route::post('/admin/login', [UserController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [MenuController::class, 'showDashboard'])->name('admin.dashboard');

// Menu
Route::get('/admin/menu/makan', [MenuController::class, 'showHalamanMakanan'])->name('admin.makanan');
Route::get('/admin/menu/minuman', [MenuController::class, 'showHalamanMinuman'])->name('admin.minuman');
Route::get('/admin/menu/lain', [MenuController::class, 'showHalamanLainnya'])->name('admin.lain');

// Add Menu Baru
Route::get('/admin/menu/tambah', [MenuController::class, 'ShowHalamanTambahMenu'])->name('admin.tambah-menu');
Route::post('/admin/menu/kirim', [MenuController::class, 'addmenu'])->name('add.menu');

// Delete menu
Route::delete('/makanan/{menuId}/delete', [MenuController::class, 'deleteMenuMakanan'])->name('delete.makanan');
Route::delete('/minuman/{menuId}/delete', [MenuController::class, 'deleteMenuMinuman'])->name('delete.minuman');
Route::delete('/lainnya/{menuId}/delete', [MenuController::class, 'deletelainnya'])->name('delete.lainnya');