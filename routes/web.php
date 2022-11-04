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

Route::view('/','form')->name("home");
Route::post('/addProduct',[Controller::class,'addProducts']);
Route::get('/data',[Controller::class,'data']);
Route::get('/test',function(){
    dd(session());
});
Route::post('/modal',[Controller::class,'modal']);
