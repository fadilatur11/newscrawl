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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','HomeController@index');
Route::get('/sitemap.xml','HomeController@sitemap');
Route::get('/detail/{id}/{slug}','DetailController@index');
Route::get('/more/{offset}','HomeController@more');
Route::get('/search','SearchController@index');
Route::get('/search/more/{keywords}/{offset}','SearchController@more');
