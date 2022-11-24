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

Route::get('n_Album','App\Http\Controllers\controller_album@album_main');
Route::get('n2_Album','App\Http\Controllers\controller_album@album_main2');
Route::get('n_sideBar','App\Http\Controllers\controller_album@sideBar');
use Intervention\Image\Facades\Image;

 