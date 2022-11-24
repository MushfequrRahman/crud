<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page;

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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', [page::class, 'index']);
Route::get('/profile', [page::class, 'profile']);
Route::get('/project', [page::class, 'project']);
Route::get('/insert_form', [page::class, 'insert_form'])->name('insert_form');
Route::post('/user_create', [page::class, 'user_create'])->name('user_create');
