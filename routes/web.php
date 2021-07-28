<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 查詢書本
Route::get('/get_books/{id}','books@get_books');
// 新增書本
Route::post('/post_books','books@post_books');
// 刪除書本
Route::delete('/delete_books/{id}','books@delete_books');
// 編輯書本
Route::post('/patch_books','books@patch_books');
