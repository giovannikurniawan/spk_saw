<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KriteriaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource("kriteria","KriteriaController")->except(['create']);
Route::resource("alternatif","AlternatifController")->except(['create','show']);
Route::resource("crips","CripsController")->except(['index','create','show']);
Route::get('/penilaian','PenilaianController@index')->name('penilaian.index');
