<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view ('home.index');
    }

    public function about(){

        return view ('about.index');
    }

    public function service(){

        return view ('services.index');
    }

    public function features(){

        return view ('features-page.index');
    }

    public function blog(){

        return view ('blog-page.index');
    }

    public function team(){

        return view ('team-page.index');
    }

    public function testimonial(){

        return view ('testimonial-page.index');
    }

    public function offer(){

        return view ('offer-page.index');
    }

    public function faqs(){

        return view ('faqs-page.index');
    }

    public function contactUs(){

        return view ('contact-us.index');
    }
}
