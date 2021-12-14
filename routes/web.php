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

#главная страница с описанием и графиком добавления записей
Route::get('/', 'App\Http\Controllers\tegsController@infoWiki') -> name('info');


#страница выводящая все теги под сортировку
Route::get('/tegs/{parametr}', 'App\Http\Controllers\tegsController@paramData') -> name('sort');


#страница поиска
Route::get('/search', 'App\Http\Controllers\tegsController@searchData') -> name('searchTegs');

#страница расширения тега, его изменения
Route::get('/teg/redaction/{id}', 'App\Http\Controllers\tegsController@redactionTeg') -> name('redaction');
#страница тега, ниже выводятся его измененные версии
Route::get('/teg/{id}', 'App\Http\Controllers\tegsController@viewTeg') -> name('tegs');


#AJAX
Route::post('/postmsg','App\Http\Controllers\tegsController@index') -> name('postmsg');



#обработчик добавления тега
Route::post('/addtegs', 'App\Http\Controllers\tegsController@addTegs') -> name('newTegs');
#обработчик редактирования тега
Route::post('/redTegs', 'App\Http\Controllers\tegsController@redTegs') -> name('redTegs');
