<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Simplydrive!";
        return view('index')->with('title', $title);
    }
    public function about(){
        $title = "About us";
        return view('about')->with('title', $title);
    }
    public function login(){
        $title = "Login here";
        return view('login')->with('title', $title);
    }
    public function register(){
        $title = "Register here!!";
        return view('register')->with('title', $title);
    }

}
