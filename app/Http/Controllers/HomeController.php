<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view ('home.index');
    }

    public function contact () {
        return view ('home.contact');
    }

    public function worldwidePresence () {
        return view ('home.worldwide-presence');
    }

    public function procurement (){
        return view ('home.procurement');
    }

    public function about () {
        return view ('home.about');
    }
}
