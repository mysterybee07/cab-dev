<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('',[homeController::class,'index']);
Route::get('',[homeController::class,'home']);
Route::get('contact',[homeController::class,'contact']);
Route::get('about_us',[homeController::class,'about_us']);
Route::get('login',[homeController::class,'login']);
