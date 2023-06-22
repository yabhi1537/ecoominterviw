<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddproductController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('productlist',[AddproductController::class,'index']);
Route::post('addproduc',[AddproductController::class,'addproducts'])->name('addproduct');
Route::get('detaills/{id}',[AddproductController::class,'detaills'])->name('detaills');
Route::post('addtocart',[AddproductController::class,'addtocart'])->name('addtocart');
Route::get('cardlisting',[AddproductController::class,'cardlisting'])->name('cardlisting');
Route::get('removeitem/{id}',[AddproductController::class,'removeitem'])->name('removeitem');


