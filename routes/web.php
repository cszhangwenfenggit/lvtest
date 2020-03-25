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

//middleware('throttle:10,1')限制访问频率：一分钟10次
Route::prefix('tests')->name('test.')->group(function () {
    Route::get('', 'TestController@index')->name('index');
    Route::post('', 'TestController@save')->name('save');
    Route::get('/edit', function () {
        return view('test.edit');
    })->name('edit');
    Route::get('/{id}', 'TestController@show')->name('show');
});

Route::fallback(function () {
    return '哎呦，找不到咯！';
});