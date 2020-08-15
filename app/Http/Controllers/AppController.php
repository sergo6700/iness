<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Home Page
     */
    public function home(){
        return view('frontend.home');
    }

    /**
     * About Page
     */
    public function about(){
        return view('frontend.about');
    }

    /**
     * Contact Page
     */
    public function contact(){
        return view('frontend.contact');
    }

    /**
     * Work Page
     */
    public function work(){
        return view('frontend.work');
    }
}
