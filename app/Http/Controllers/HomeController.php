<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
      
        # code...
        return view('gvc.pages.index');
    }
    public function about()
    {

        return view('gvc.pages.about');
    }
    public function service()
    {

        return view('gvc.pages.service');
    }
    
    public function contact()
    {
        return view('gvc.pages.contact');
    }
}