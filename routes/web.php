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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('blogs', App\Http\Controllers\BlogController::class);

// Route::get('blogs', function() {
//    return view('blogs');
// });

// Route::get('blogs/1', function() {
//    return view('blog_1');
// });

// Route::get('blogs/2', function() {
//    return view('blog_2');
// });

// Route::get('blogs/3', function() {
//    return view('blog_3');
// });

// Route::get('blogs/4', function() {
//    return view('blog_4');
// });

// Route::get('blogs/5', function() {
//    return view('blog_5');
// });

