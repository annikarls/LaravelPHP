<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }
    public function login() {
        return view('login');
    }
    public function beer() {
        return view('beer');
    }
    public function contact() {
        return view('contact');
    }
    public function event() {
        return view('event');
    }
    public function register() {
        return view('register');
    }
}
