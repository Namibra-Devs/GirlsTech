<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // Frontend functional views
    public function index() {
        return view('frontend/index');
    }

    public function blog() {
        return view('frontend/blog');
    }
    public function contact() {
        return view('frontend/contact');
    }
    public function event() {
        return view('frontend/event');
    }
    public function program() {
        return view('frontend/program');
    }
    public function donate() {
        return view('frontend/donate');
    }
}
