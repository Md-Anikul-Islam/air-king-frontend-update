<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }


    public function contact()
    {
        return view('frontend.contact');
    }

    public function product()
    {
        return view('frontend.product');
    }
}
