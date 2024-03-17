<?php

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

Route::get( '/', function () {
    return view( 'home' );
} );
Route::get( '/blog-details', function () {
    return view( 'single_post' );
} );
Route::get( '/about-us', function () {
    return view( 'about_us' );
} );
Route::get( '/contact-us', function () {
    return view( 'contact_us' );
} );
// Route::get( '/', function () {
//     return view( 'home' )->name( 'home' );
// } );
// Route::get( '/blog-details', function () {
//     return view( 'single_post' )->name( 'blog-details' );
// } );
// Route::get( '/about-us', function () {
//     return view( 'about_us' )->name( 'about-us' );
// } );
// Route::get( '/contact-us', function () {
//     return view( 'contact_us' )->name( 'contact-us' );
// } );
