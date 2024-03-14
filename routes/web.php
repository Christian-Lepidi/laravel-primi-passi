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
    $title = "Hello World";
    $paragraph = "first project with Laravel!";
    $usedtools = ["PHP","Blade","Laravel"];
    return view("helloworld",compact("title","paragraph","usedtools"));
});
