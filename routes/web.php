<?php

 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\base;
use App\Http\Controllers\Admincontroller;
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
Route::get('/home',[base::class,'home']);
Route::get('/services',[base::class,'services']);
Route::get('/company',[base::class,'company']);
Route::get('/Login',[base::class,'Login']);

Route::get('/admin',[Admincontroller::class,'index'])->name('login');
Route::post('/admin',[Admincontroller::class,'makeLogin']);


Route::group(['middleware'=>'auth:admin'],function(){
Route::get('/dashboard',[Admincontroller::class,'dashboard']);
});


