<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('insertdata');
});
//Route::post('/insert',[Controller::class,'insert']);
Route::post('insert','App\Http\Controllers\Controller@insert');
Route::get('view-records','App\Http\Controllers\Controller@show');
Route::get('delete/{id}','App\Http\Controllers\Controller@destroy');

Route::get('edit-records','App\Http\Controllers\Controller@index');
Route::get('edit/{id}','App\Http\Controllers\Controller@shows');
Route::post('edit/{id}','App\Http\Controllers\Controller@edit');
