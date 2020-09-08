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

Route::get('/', 'BlogController@recentBlog')->name('welcome');

Route::get('/blog', 'BlogController@allData')->name('blog');
Route::get('/blog/{id}',  'BlogController@showPost')->name('post');
Route::post('/blog/',  'BlogController@backBlog')->name('back-blog');

Route::get('/portfolio', 'PortfolioController@allData')->name('portfolio');
Route::get('/portfolio/{id}',  'PortfolioController@showPost')->name('portfolio-post');
Route::post('/portfolio/',  'PortfolioController@backPortfolio')->name('back-portfolio');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');


