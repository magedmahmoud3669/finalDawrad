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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

 
// Route::get('/section', '\App\Http\Controllers\SectionController@tester');


// Route::get('/style', '\App\Http\Controllers\copyController@style');
// Route::get('/sector', '\App\Http\Controllers\SectorController@tester');
Route::get('/', '\App\Http\Controllers\InterFaceController@userinterface');
 
 Route::post('/convert', '\App\Http\Controllers\testerrrController@rabie')->name('convert')->middleware('auth');


 Route::get('/new', '\App\Http\Controllers\RabieController@tester');
 Auth::routes();



// Route::get('/home', 'HomeController@index')->name('home');






Route::get('/home', 'HomeController@index')->name('home');
