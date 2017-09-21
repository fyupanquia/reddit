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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('/post','PostController');

Route::name("posts_path")->get("/post","PostController@index");
Route::name("store_post_path")->post("/post","PostController@store");


Route::name("create_post_path")->get("/post/create","PostController@create");
Route::name("post_path")->get("/post/{post}","PostController@show");
