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

Route::get('/New/Out', function () {
    $macro = \App\Macro::all();
    return view('new_out', [ 'macro' => $macro]);
});

Route::get('/New/Out/{macro}', function ($macro) {
    $micro = \App\Micro::all();
    return view('new_out_micro', [ 'micro' => $micro, 'macro' => $macro]);
});

Route::get('/New/Out/{macro}/{micro}', function ($macro, $micro) {
    $mini = DB::table('minis')->where('micro_id', $micro)->get();
    return view('new_out_mini', [ 'micro' => $micro, 'macro' => $macro, 'mini' => $mini]);
});