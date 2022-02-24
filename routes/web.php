<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\EditCvController;
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
    return view('home');
});
Route::get('/addCV', function () {
    return view('addCV');
});
Route::post('/addCV',[BasicController::class,'saveBasic']);
Route::get('/',[BasicController::class,'show']);
Route::get('edit/{id}',[EditCvController::class,'showEdit']);
Route::post('edit/{id}',[EditCvController::class,'update']);
Route::get('preview/{id}',[EditCvController::class,'preview']);
