<?php

use App\Http\Controllers\PostController;
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