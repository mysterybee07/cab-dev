<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function hello(){
        return view('hello');
    }
    public function about_us(){
        return view('about_us');
    }
    public function contact(){
        return view('contact');
    }
    public function login(){
        return view('login');
    }
}
