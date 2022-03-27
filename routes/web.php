<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', [HomeController::class, 'show_post'])->name('welcome');
Route::get('/singlepost', [HomeController::class, 'show'])->name('single');

Route::middleware(['auth'])->group(function(){

Route::get('/dashboard', [DashboardController::class, 'show_post'])->name('dashboard');
Route::get('/post' ,[PostController::class, 'index'])->name('post_index');
Route::post('/post' ,[PostController::class, 'create'])->name('post_create');
Route::get('/post/edit/{id}' ,[PostController::class, 'edit'])->name('post_edit');
Route::post('/post/edit/{id}' ,[PostController::class, 'update'])->name('post_update');
Route::get('/post/delete/{id}' ,[PostController::class, 'destroy'])->name('post_delete');
Route::get('delete-multiple-category', [PostController::class, 'deleteMultiple'])->name('multiple-delete');

});



require __DIR__.'/auth.php';