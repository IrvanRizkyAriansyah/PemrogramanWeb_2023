<?php

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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {  
//     return "Hello World";
// });

// Route::get('/home', function () {  
//     return "This is home page";
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/identity', [ProfileController::class, 'identity']);
Route::get('/profile/family', [ProfileController::class, 'family']);