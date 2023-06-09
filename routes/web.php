<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\classController;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/home',[homeController::class,'index']);
Route::get('/student',[StudentController::class,'index']);

// route prefix group
// Route::prefix('admin')->group(function () {
//     // route parameter
//     Route::get('/dayat/{id}', function ($id) {
//         return 'halo dayat' . $id;
//     });

//     // route view
//     Route::get('/about', function () {
//         return view('welcome', ['nama' => 'dayat']);
//     });

//     // route controller
//     Route::get('/profile', profileController::class, 'index');
// });
