<?php

use Illuminate\Support\Facades\Auth;
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
    if (Auth::check()) {
        return toDashboard();
    }
    return view('auth.login');
});

Route::view('/sales', 'layouts.dashboard');

/* ----------------admin only route ------------*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:superadmin|admin']], function () {
    Route::get('/users', \App\Http\Livewire\Users::class)->name('users');
    Route::get('/roles', \App\Http\Livewire\Guard::class)->name('gate');
    Route::get('/books', \App\Http\Livewire\AllBooks::class)->name('books');
});

Route::get('/superadmin/home', App\Http\Livewire\AdminDashboard::class)->middleware('role:superadmin|admin');


Route::get('/home', function () {
    return toDashboard();
})->name('home')->middleware('auth');
Route::get('/profile', App\Http\Livewire\ImageUpload::class)->name('profile')->middleware('auth');
Route::get('/borrowers', App\Http\Livewire\Borrows::class)->name('admin.book')->middleware('role:admin|librarian');