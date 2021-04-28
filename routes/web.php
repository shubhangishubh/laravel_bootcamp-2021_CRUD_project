<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactUsController;

use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\logoutController;
use App\Http\Controllers\auth\registerController;

use App\Http\Controllers\admin\booksController;
use App\Http\Controllers\admin\dashboardController;
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

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/about', [aboutController::class, 'index'])->name('about');

Route::get('/contactUs', [contactUsController::class, 'index'])->name('contactUs');
Route::post('/contactUs', [contactUsController::class, 'contactUs']);

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::get('/register', [registerController::class, 'index'])->name('register');

Route::post('/register', [registerController::class, 'register']);
Route::post('/login', [loginController::class, 'login']);

Route::get('/logout', [logoutController::class, 'logout'])->name('logout');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/book', [booksController::class, 'create'])->name('addBook');
Route::post('/dashboard/book', [booksController::class, 'store']);

Route::get('/dashboard/view-books', [booksController::class, 'index'])->name('viewBooks');
Route::put('/dashboard/book/{books}', [booksController::class, 'update'])->name('editBook');
Route::delete('/dashboard/book/{books}', [booksController::class, 'destroy'])->name('deleteBook');