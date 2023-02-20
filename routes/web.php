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
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:superadmin|administrator']], function () {
    Route::get('/users', \App\Http\Livewire\Users::class)->name('lecturers');
    Route::get('/roles', \App\Http\Livewire\Guard::class)->name('gate');
    Route::get('/levels', \App\Http\Livewire\Levels::class)->name('levels');
    Route::get('/courses', \App\Http\Livewire\Courses::class)->name('courses');
    Route::get('/courses/allocation', \App\Http\Livewire\Allocation::class)->name('allocations');
});

Route::get('/administrator/home', App\Http\Livewire\AdminDashboard::class)->middleware('role:superadmin|administrator');


Route::get('/home', function () {
    return toDashboard();
})->name('home')->middleware('auth');
Route::get('/profile', App\Http\Livewire\ImageUpload::class)->name('profile')->middleware('auth');