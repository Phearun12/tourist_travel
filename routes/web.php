<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;

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
  //  return view('welcome');
//});


/*Route::get('/', function () {
    return view('front-agency');
});

Route::get('/home', function () {
    return view('front-home');
});*/
Route::get('/',[FrontPageController::class,'index'])->name(name:'front.home');
Route::get('/about',[FrontPageController::class,'about'])->name(name:'front.about');
Route::get('/services',[FrontPageController::class,'services'])->name(name:'front.services');
Route::get('/packages',[FrontPageController::class,'packages'])->name(name:'front.packages');
Route::get('/destination',[FrontPageController::class,'destination'])->name(name:'front.destination');
Route::get('/booking',[FrontPageController::class,'booking'])->name(name:'front.booking');
Route::get('/guide',[FrontPageController::class,'guide'])->name(name:'front.guide');
Route::get('/testimanial',[FrontPageController::class,'testimanial'])->name(name:'front.testimanial');
Route::get('/contact',[FrontPageController::class,'contact'])->name(name:'front.contact');
