<?php

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




Route::get('/', ["App\\Http\\Controllers\\comments", 'index'])->name('comments');
Route::post('/comments/add', ["App\\Http\\Controllers\\comments", 'add']);

Route::get('/comments/error', function () {
     return view('error_add_comment');
});
