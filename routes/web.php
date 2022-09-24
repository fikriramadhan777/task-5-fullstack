<?php

use Illuminate\Support\Facades\Route;
use App\Http\UserControllers;
use App\Http\CategoriesControllers;
use App\Http\ArticlesControllers;

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

    Route::resource('user', UserController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('articles', ArticlesController::class);
});