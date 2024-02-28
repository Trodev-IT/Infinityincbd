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

Route::get('/singlepage/{id}',[Homepage::class,'singlepage'])->name('singlepage');

Route::get('/photos',[Homepage::class,'gallary'])->name('gallary');

Route::get('/contactus',[Homepage::class,'contact'])->name('contact');

Route::post('/sendEmail',[Homepage::class,'sendEmail'])->name('sendEmail');

Route::post('/subscriber',[Homepage::class,'subscriber'])->name('subscriber');

Route::get('/events',[Homepage::class,'eventsList'])->name('eventsList');

Route::get('/event-details/{id}',[Homepage::class,'details_event'])->name('details_event');
