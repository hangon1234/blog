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

Route::get("/", "HomeController@index")->name('home');
Route::get("/about", "HomeController@about");
Route::get("/contact", "HomeController@contact");
Route::get("/skill", "HomeController@skill");
Route::get("/project", 'HomeController@project');
Route::post("/contact/submit", "HomeController@submit");

Auth::routes();