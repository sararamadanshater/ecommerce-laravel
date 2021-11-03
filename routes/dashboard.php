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
    return view('dashboard.auth.login');
});

// Route::post('/dash', function () {
//     return view('dashboard.dash');
// });

//Route::any('login', 'AuthController@login')->name('dashboard.login');

Route::any('login', function ()
{
    return dd(1);
})->name('dashboard.login');