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

Route::get('/', 'App\Http\Controllers\tegsController@allData') -> name('start');

Route::get('/search.html', function () {
    return view('search');
}) -> name('search');

Route::get('/redaction/{id}', 'App\Http\Controllers\tegsController@redactionTeg') -> name('redaction');

Route::get('/tegs/{id}', 'App\Http\Controllers\tegsController@viewTeg') -> name('tegs');

Route::post('/addtegs', 'App\Http\Controllers\tegsController@addTegs') -> name('newTegs');

Route::post('/redTegs', 'App\Http\Controllers\tegsController@redTegs') -> name('redTegs');
