<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Test29bController;
use App\Http\Controllers\Test29Controller;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Route::get( '/', function () {
//     return view( 'home' );
// } )->name( 'home' );

// Route::get( '/blog-details', function () {
//     return view( 'single_post' );
// } );

// Route::get( '/about-us', function () {
//     return view( 'about_us' );
// } );

// Route::get( '/contact-us', function () {
//     return view( 'contact_us' );
// } );

// Route::prefix( 'admin' )->group( function () {
//     Route::get( '/', function () {
//         return view( 'admin.admin_home' );
//     } );
//     // Route::get( '/blogs', function () {
//     //     return view( 'admin.blogs' );
//     // } );
//     // Route::get( '/blog-create', function () {
//     //     return view( 'admin.blog_add' );
//     // } );
//     Route::get( '/blogs', [BlogController::class, 'index'] )->name( 'blogs' );
//     Route::get( '/blog-create', [BlogController::class, 'create'] )->name( 'blog-create' );
//     Route::post( '/blog-store', [BlogController::class, 'store'] )->name( 'blog-store' );

//     Route::post( '/blog2-store', [Blog2::class, 'store'] )->name( 'blog-2-store' );
// } );

// returns the home page with all posts
Route::get( '/', PostController::class . '@index' )->name( 'posts.index' );
// returns the form for adding a post
Route::get( '/posts/create', PostController::class . '@create' )->name( 'posts.create' );
// adds a post to the database
Route::post( '/posts', PostController::class . '@store' )->name( 'posts.store' );
// returns a page that shows a full post
Route::get( '/posts/{post}', PostController::class . '@show' )->name( 'posts.show' );
// returns the form for editing a post
Route::get( '/posts/{post}/edit', PostController::class . '@edit' )->name( 'posts.edit' );
// updates a post
Route::put( '/posts/{post}', PostController::class . '@update' )->name( 'posts.update' );
// deletes a post
Route::delete( '/posts/{post}', PostController::class . '@destroy' )->name( 'posts.destroy' );

Route::get( '/testing', TestingController::class . "@index" )->name( 'testing.index' );

Route::get( '/test29', Test29Controller::class . '@index' )->name( 'test29.index' );
Route::post( '/test29/store', Test29Controller::class . '@store' )->name( 'test29.store' );
Route::get( '/test29/create', Test29Controller::class . '@create' )->name( 'test29.create' );
Route::get( '/test29/{id}/edit', Test29Controller::class . '@edit' )->name( 'test29.edit' );
Route::put( '/test29/{id}', Test29Controller::class . '@update' )->name( 'test29.update' );
Route::delete( '/test29/{id}', Test29Controller::class . '@destroy' )->name( 'test29.destroy' );

Route::get( 'test29b', Test29bController::class . '@index' )->name( 'test29b.index' );
Route::post( 'test29b/store', Test29bController::class . '@store' )->name( 'test29b.store' );
Route::get( 'test29b/create', Test29bController::class . '@create' )->name( 'test29b.create' );
Route::get( 'test29b/{id}/edit', Test29bController::class . '@edit' )->name( 'test29b.edit' );
Route::put( 'test29b/{id}', Test29bController::class . '@update' )->name( 'test29b.update' );
Route::delete( 'test29b/{id}', Test29bController::class . '@destroy' )->name( 'test29b.destroy' );