<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


//作業一 view
Route::get('album_example','App\Http\Controllers\AlbumController@album_example');
Route::get('album_main','App\Http\Controllers\AlbumController@album_main');
Route::get('sideBar_example','App\Http\Controllers\AlbumController@sideBar');
Route::get('sidebar_test','App\Http\Controllers\SidebarController@sidebartest');


//網址生成路徑----------------------------------------------------------------------
//網址生成路徑 方法一:url('A')
// Route::get('/', function () {
//     return view('welcome');
// });
//網址生成路徑 方法二:->name('A') + route('A')
// Route::get('/', function () {
//     return view('welcome');
// })->name('public');

//網址生成路徑 方法三:有一的存在的controller
Route::get('show','App\Http\Controllers\PostController@show');

Route::get('/url',function(){
  //return url('/'); //網址生成路徑 方法一:url()
  //return route('public'); //網址生成路徑 方法二:->name('A') + route('A')
  // return action([PostController::class,'show']); //方法三:有一的存在的controller
});
//網址生成路徑----------------------------------------------------------------------

Route::resource('/posts','App\Http\Controllers\PostController');