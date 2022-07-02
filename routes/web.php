<?php

use App\Http\Controllers\distribution\index_distribution;
use App\Http\Controllers\drivers\driver_index;
use App\Http\Controllers\QRCode\qrcontroller;
use App\Http\Controllers\store\index;
use App\Http\Controllers\tubes\tube_controller;
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


Route::post('store',[tube_controller::class,'store']);
Route::get('home',[index::class,'home']);
Route::get('index',[tube_controller::class,'index']);
Route::get('/{id}',[tube_controller::class,'index2']);
//Route::get('index{id}',[tube_controller::class,'index2']);
Route::get('tubes/create',[tube_controller::class,'create']);
Route::post('tube/update{id}',[tube_controller::class,'update']);
Route::get('tube/edit{id}',[tube_controller::class,'edit']);
Route::get('store/create',[index::class,'create']);
Route::post('tube/delete{id}',[tube_controller::class,'destroy']);
Route::get('index_distribution',[index_distribution::class,'index']);
Route::get('index/drives',[driver_index::class,'index']);
Route::get('create/drives',[driver_index::class,'create']);
Route::get('qr',[qrcontroller::class,'index']);

