<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function team()
    {
        return view('team');
    }
    public function career()
    {
        return view('career');
    }



    // services
    public function waterdamage()
    {
        return view('services.waterdamage');
    }
    public function commercialServices()
    {
        return view('services.commercialServices');
    }
    public function construction()
    {
        return view('services.construction');
    }
    public function fireDamage()
    {
        return view('services.fireDamage');
    }
    public function generalCleaning()
    {
        return view('services.generalCleaning');
    }
    public function moldRemediation()
    {
        return view('services.moldRemediation');
    }
    public function specialtyCleaning()
    {
        return view('services.specialtyCleaning');
    }
    public function stormDisaster()
    {
        return view('services.stormDisaster');
    }
}
