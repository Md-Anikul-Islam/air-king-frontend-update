<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yoeunes\Toastr\Facades\Toastr;

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
    public function team()
    {
        return view('frontend.team');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }


    public function productRequest(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        DB::table('product_requests')->insert([
            'product_name' => $request->product_name,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Toastr::success('Product Request Send Successfully', 'Success');
        return redirect()->back();

    }


}
