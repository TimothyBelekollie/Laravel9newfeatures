<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// I am using helper function
// Route::get('/', function () {
//     return str('Hi, I am Timothy wishing you an amazing day')->upper();
// });

// Route::get('/', function () {
//     return str('Hi, I am Timothy wishing you an amazing day')->slug();
// });

Route::get('/', function () {
    return view('welcome');
})->name('test');


Route::get('/test', function () {
 return redirect()->route('test');
});
// this is Laravel 8 way of defining route
Route::get('/about',[HomeController::class,'index']);
Route::get('/contact',[HomeController::class,'contact']);

// this is route grouping in laravel 9
Route::controller(HomeController::class)->group(function(){
    Route::get('/about','index');
    Route::get('/contact','contact');
});
