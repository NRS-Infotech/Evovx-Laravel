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

    public function proservices()
    {
        return view('site.proservices');
    }

    public function governmentservices()
    {
        return view('site.governmentservices');
    }

    public function translationservices()
    {
        return view('site.translationservices');
    }

    public function notaryattestation()
    {
        return view('site.notaryattestation');
    }

    public function goingdigital()
    {
        return view('site.goingdigital');
    }

    public function certificateattestation()
    {
        return view('site.certificateattestation');
    }

    public function managementconsulting()
    {
        return view('site.managementconsulting');
    }

    public function commercialbrokerage()
    {
        return view('site.commercialbrokerage');
    }

    public function customizedgift()
    {
        return view('site.customizedgift');
    }

    public function eventmanagement()
    {
        return view('site.eventmanagement');
    }
}
