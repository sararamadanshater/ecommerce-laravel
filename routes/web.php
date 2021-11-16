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
// });
// Route::get('/admin', function () {
//     return view('dashboard.index');
// })->name('dashboard.admin');



Route::get('/', 'HomeController@index')->name('home');

Route::get('category/{category}', 'HomeController@category')->name('category');
Route::any('products', 'HomeController@products')->name('products');
Route::get('products/{id}', 'HomeController@show')->name('product.show');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, config()->get('app.locales'))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang');
