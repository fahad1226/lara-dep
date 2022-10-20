<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', fn () => view('welcome'));

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('posts', [PostController::class, 'index'])->name('posts');
});



require __DIR__ . '/auth.php';
