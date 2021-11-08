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
// Route::middleware('adminAuth')->group(function(){
//     Route::any('/admin', function () {
//         return view('dashboard.index');
//     })->name('dashboard.admin');
    
// });

// Route::get('/', function () {
//     return view('dashboard.auth.login');
// });

// Route::post('/','AuthController@login')->name('dashboard.login');

//  Route::middleware(['adminAuth'])->group(function(){
    
//     Route::any('/admin','HomeController@index')->name('dashboard.admin');
//     Route::resource('sliders','SliderController')->except(['show','edit','update']);
    
//  });

Route::get('login', function () {
        return view('dashboard.auth.login');
    });
 
Route::post('login', 'AuthController@login')->name('dashboard.login');

Route::middleware(['adminAuth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::any('logout', 'AuthController@logout')->name('dashboard.logout');
    Route::resource('sliders','SliderController')->except(['show','edit','update']);
    
});