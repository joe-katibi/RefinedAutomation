<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Services;
use App\Models\ContactInfo;
use App\Models\ServiceList;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();
        $services = Services::where('status','=',1)->get();
        $serviceLists = ServiceList::where('status','=',1)->get();
        $testimonials = Testimonial::where('status','=',1)->get();


        return view ('home.index', compact('contacts','entries','services','serviceLists','testimonials'));
    }

    public function about(){
        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();

       // dd($entries );

        return view ('about.index', compact('contacts','entries'));
    }

    public function service(){
        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();
        $services = Services::where('status','=',1)->get();
        $serviceLists = ServiceList::where('status','=',1)->get();
        $testimonials = Testimonial::where('status','=',1)->get();


        return view ('services.index', compact('contacts','entries','services','serviceLists','testimonials'));
    }

    public function features(){
        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();

        return view ('features-page.index', compact('contacts','entries'));
    }

    public function blog(){
        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();

        return view ('blog-page.index', compact('contacts','entries'));
    }

    public function team(){

        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();
        return view ('team-page.index', compact('contacts','entries'));
    }

    public function testimonial(){
        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();
        $testimonials = Testimonial::where('status','=',1)->get();

        return view ('testimonial-page.index', compact('contacts','entries','testimonials'));
    }

    public function offer(){
        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();

        return view ('offer-page.index', compact('contacts','entries'));
    }

    public function faqs()
    {
        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();



        return view ('faqs-page.index', compact('contacts','entries'));
    }

    public function contactUs(){

        $contacts = ContactInfo::where('status','=',1)->get();
        $entries = AboutUs::where('status','=',1)->get();

        //dd($contacts);

        return view ('contact-us.index', compact('contacts','entries'));
    }

    public function consulting(){

        $contacts = ContactInfo::all();

        dd($contacts);

        return view ('footer.footer', compact('contacts'));
    }
}
