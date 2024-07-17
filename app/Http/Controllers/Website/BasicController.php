<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home()
    {
        return view('site.home');
    }
    public function about()
    {
        return view('site.about');
    }
    public function services()
    {
        return view('site.services');
    }
    public function contact()
    {
        return view('site.contact');
    }
}
