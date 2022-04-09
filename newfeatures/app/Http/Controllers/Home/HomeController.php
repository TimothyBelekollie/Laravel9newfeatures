<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class HomeController extends Controller
{
    //
    public function index(){
return View('about');
    }// this is the end of the method
    public function contact(){
        return view('contact');
    }// this is the end of the method
}
