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

<<<<<<< HEAD
Route::group(['middleware'=>['auth']], function(){
	Route::prefix('admin')->group(function(){
	Route::get('/', function(){
		return view('admin.pages.dashboard');
		})->name('admin.home');
});
});

=======
Route::prefix('admin')->group(function(){
	Route::get('/', function(){
		return view('admin.main');
		})->name('admin.home');
});
>>>>>>> 82870278d1d2a26ad94030ca566ad9cb32e94a99

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
