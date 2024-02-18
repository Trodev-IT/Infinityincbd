<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[Homepage::class,'welcome'])->name('welcome');

Route::get('/aboutus',[Homepage::class,'aboutus'])->name('aboutus');

Route::get('/projectbase',[Homepage::class,'projectbase'])->name('project');
