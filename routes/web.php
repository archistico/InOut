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
    $subdivisions = \App\Subdivision::all();
    //$subdivisions = \App\Mini::all();
    return view('welcome', [ 'subdivisions' => $subdivisions]);
});
