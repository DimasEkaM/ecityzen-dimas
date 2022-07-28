<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegitigaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('segitiga', 'App\Http\Controllers\SegitigaController@index');
Route::post('terbilang', 'App\Http\Controllers\TerbilangController@index');

Route::get('karyawan','App\Http\Controllers\KaryawanController@index');
Route::post('karyawan','App\Http\Controllers\KaryawanController@create');
Route::put('/karyawan/{id}','App\Http\Controllers\KaryawanController@update');
Route::delete('karyawan/{id}','App\Http\Controllers\KaryawanController@delete');

Route::get('department','App\Http\Controllers\DepartmentController@index');
Route::post('department','App\Http\Controllers\DepartmentController@create');
Route::put('/department/{id}','App\Http\Controllers\DepartmentController@update');
Route::delete('department/{id}','App\Http\Controllers\DepartmentController@delete');

Route::get('jabatan','App\Http\Controllers\JabatanController@index');
Route::post('jabatan','App\Http\Controllers\JabatanController@create');
Route::put('/jabatan/{id}','App\Http\Controllers\JabatanController@update');
Route::delete('jabatan/{id}','App\Http\Controllers\JabatanController@delete');

Route::get('level','App\Http\Controllers\LevelController@index');
Route::post('level','App\Http\Controllers\LevelController@create');
Route::put('/level/{id}','App\Http\Controllers\LevelController@update');
Route::delete('level/{id}','App\Http\Controllers\LevelController@delete');