<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view ('admin.dashboard');
    }

    public function about(){

        return view ('admin.about');
    }

    public function service(){

        return view ('admin.services');
    }

    public function features(){

        return view ('admin.features');
    }

    public function blog(){

        return view ('admin.blog');
    }

    public function team(){

        return view ('admin.team');
    }

    public function testimonial(){

        return view ('admin.testimonal');
    }

    public function offer(){

        return view ('admin.offers');
    }

    public function faqs(){

        return view ('admin.faqs');
    }

    public function contactUs(){

        return view ('admin.contact');
    }

}
