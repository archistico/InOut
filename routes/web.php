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

use App\Out;
use Illuminate\Http\Request;

Route::get('/', function () {
    $subdivisions = \App\Subdivision::all();
    //$subdivisions = \App\Mini::all();
    return view('welcome', [ 'subdivisions' => $subdivisions]);
});

Route::get('/new/{subdivision}', function ($subdivision) {
    $macro = \App\Macro::all();
    return view('new_out', [ 'subdivision' => $subdivision, 'macro' => $macro]);
});

Route::get('/new/{subdivision}/{macro}', function ($subdivision, $macro) {
    $micro = \App\Micro::all();
    return view('new_out_micro', [ 'subdivision' => $subdivision, 'micro' => $micro, 'macro' => $macro]);
});

Route::get('/new/{subdivision}/{macro}/{micro}', function ($subdivision, $macro, $micro) {
    $mini = DB::table('minis')->where('micro_id', $micro)->get();
    return view('new_out_mini', [ 'subdivision' => $subdivision, 'micro' => $micro, 'macro' => $macro, 'mini' => $mini]);
});

Route::get('/new/{subdivision}/{macro}/{micro}/{mini}', function ($subdivision, $macro, $micro, $mini) {
    $subdivision = DB::table('subdivisions')->where('id', $subdivision)->get();
    $macro = DB::table('macros')->where('id', $macro)->get();
    $micro = DB::table('micros')->where('id', $micro)->get();
    $mini = DB::table('minis')->where('id', $mini)->get();
    return view('new_out_amount', [ 'subdivision' => $subdivision[0], 'micro' => $micro[0], 'macro' => $macro[0], 'mini' => $mini[0]]);
});

Route::post('/new/{subdivision}/{macro}/{micro}/{mini}', function ($subdivision, $macro, $micro, $mini, Request $req) {
    $subdivision = DB::table('subdivisions')->where('id', $subdivision)->get();
    $macro = DB::table('macros')->where('id', $macro)->get();
    $micro = DB::table('micros')->where('id', $micro)->get();
    $mini = DB::table('minis')->where('id', $mini)->get();

    $amount = $req->input('amount');
    $note = $req->input('note');
    $date = $req->input('date');

    $out = new Out();

    $out->subdivision_id = $subdivision[0]->id;
    $out->macro_id = $macro[0]->id;
    $out->micro_id = $micro[0]->id;
    $out->mini_id = $mini[0]->id;
    $out->amount = $amount;
    $out->note = $note;
    $out->date = $date;

    $out->save();

    return redirect('/view');
});

Route::get('/view', function () {
    //$outs = \App\Out::all();

    $outs = DB::table('outs')
        ->join('subdivisions', 'subdivisions.id', '=', 'outs.subdivision_id')
        ->join('macros', 'macros.id', '=', 'outs.macro_id')
        ->join('micros', 'micros.id', '=', 'outs.micro_id')
        ->join('minis', 'minis.id', '=', 'outs.mini_id')
        ->select('outs.*', 'macros.description as macrodescription', 'micros.description as microdescription', 'minis.description as minidescription')
        ->get();

    return view('view_out', [ 'outs' => $outs]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
