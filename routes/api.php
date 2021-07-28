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

// 查詢書本
Route::get('/get_books/{id}','books@get_books');
// 新增書本
Route::post('/post_books','books@post_books');
// 刪除書本
Route::delete('/delete_books/{id}','books@delete_books');
// 編輯書本
Route::post('/patch_books','books@patch_books');
