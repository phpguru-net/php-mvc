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
    return view('home', [
        "title" => "PHP MVC - Bootstrap"
    ]);
});

Route::get('/text', function(){
    return '<h1>Route : HTML</h1>';
});

Route::get('/json', function(){
    return json_encode(array("foo" => "bar"));
});
Route::get('tada', function(){
    return json_encode(array("foo" => "bar"));
});

// 302 : Moved Temporary
Route::redirect('/html','/text');
// 301: Moved Permanently
Route::redirect('/string','/text', 301);
// 301
Route::permanentRedirect('/old-string', '/string');

// Route Parameters
Route::get('/examples/{firstName}/{lastName}', function ($firstName, $lastName) {
    return view('home', [
        "title" => "Hello $firstName $lastName"
    ]);
});

// https://laravel.com/docs/8.x/routing#redirect-routes
