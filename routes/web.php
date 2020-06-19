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

Route::get('admin', function () {
    return redirect()->route('admin.dashboard');
})->name('admin');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    // Post
    Route::get('posts', 'PostsController@index')->name('posts');
    Route::get('posts/create', 'Postscontroller@create')->name('posts.create');
});
