<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Blade;

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
// I am using helper function
// Route::get('/', function () {
//     return str('Hi, I am Timothy wishing you an amazing day')->upper();
// });

// Route::get('/', function () {
//     return str('Hi, I am Timothy wishing you an amazing day')->slug();
// });
// This is new feature is meant to render a blade string.
Route::get('/render', function () {
    return Blade::render('{{$value}},Timothy',['value'=>'Hello']);
});


Route::get('/test', function () {
//  return redirect()->route('test');
// the to_route helper function perform the same action the redirect()and route() fuction does.
return to_route('test');
});
// this is Laravel 8 way of defining route
Route::get('/about',[HomeController::class,'index']);
Route::get('/contact',[HomeController::class,'contact']);

// this is route grouping in laravel 9
Route::controller(HomeController::class)->group(function(){
    Route::get('/about','index');
    Route::get('/contact','contact');
});
// Another new feature in laravel 9 is the ignition error page
