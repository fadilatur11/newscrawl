<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'guest', 'namespace' => 'Api', 'prefix' => 'crawler'], function() {
    Route::get('beritajatim', 'CrawlerController@beritaJatim')->name('crawler.beritajatim');
    Route::get('jatimtimes', 'CrawlerController@jatimTimes')->name('crawler.jatimtimes');
    Route::get('jawapos', 'CrawlerController@jawaPos')->name('crawler.jawapos');
    Route::get('pantura', 'CrawlerController@pantura')->name('crawler.pantura');
    Route::get('tribun', 'CrawlerController@tribun')->name('crawler.tribun');
    Route::get('warmo', 'CrawlerController@warmo')->name('crawler.warmo');
});
