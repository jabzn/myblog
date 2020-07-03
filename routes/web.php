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

Route::get('/', 'PagesController@index')->name('home');
Route::get('posts/{post:slug}', 'PagesController@show')->name('post');
Route::get('category/{category:name}', 'PagesController@showPostsbyCategory')->name('category');
Route::get('tags/{tag:name}', 'PagesController@showPostsbyTag')->name('tag');
Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::post('search', 'PagesController@search')->name('search');

Auth::routes();

Route::get('admin', function () {
    return redirect()->route('admin.dashboard');
})->name('admin');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    // Post
    Route::get('posts', 'PostsController@index')->name('posts');
    Route::get('posts/create', 'PostsController@create')->name('posts.create');
    Route::post('posts', 'PostsController@store')->name('posts.store');
    Route::get('posts/{post}', 'PostsController@show')->name('posts.show');
    Route::get('posts/{post}/edit', 'PostsController@edit')->name('posts.edit');
    Route::put('posts/{post}', 'PostsController@update')->name('posts.update');
    Route::delete('posts/{post}', 'PostsController@destroy')->name('posts.destroy');

    // Category
    Route::get('categories', 'CategoriesController@index')->name('categories');
    Route::post('categories', 'CategoriesController@store')->name('categories.store');
    Route::get('categories/{category}', 'CategoriesController@edit')->name('categories.edit');
    Route::put('categories/{category}', 'CategoriesController@update')->name('categories.update');
    Route::delete('categories/{category}', 'CategoriesController@destroy')
        ->name('categories.destroy');

    // Tags
    Route::get('tags', 'TagsController@index')->name('tags');
    Route::get('tags/{tag}', 'TagsController@edit')->name('tags.edit');
    Route::put('tags/{tag}', 'TagsController@update')->name('tags.update');
    Route::delete('tags/{tag}', 'TagsController@destroy')->name('tags.destroy');
});
