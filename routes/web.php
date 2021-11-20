<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

/*
Route::get('/', function () {
    return view('welcome');
});

*/





Route::get('/',[StudentController::class,'index'])->middleware('auth');
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::get('/delete/{id}',[StudentController::class,'destroy']);
Route::get('/show/{id}',[StudentController::class,'show']);
Route::post('/store',[StudentController::class,'store']);
Route::get('/create',[StudentController::class,'create']);
Route::post('/update/{id}',[StudentController::class,'update']);

Route::get('update/profile',function (){
    return view('auth.edit');
})->middleware('auth');

Route::get('update/password',function (){
    return view('auth.update-pwd');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
