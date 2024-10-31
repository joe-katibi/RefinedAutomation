<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\ContactInfo;
use App\Models\Services;
use App\Models\ServiceList;
use App\Models\Features;
use App\Models\FeatureList;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view ('admin.dashboard');
    }

    public function about(){


        $entries = AboutUs::all();
        return view ('admin.about', compact('entries'));
    }

    public function service(){

        $services = Services::all();
        $categories = ServiceList::with('subcategories')->get();
        return view ('admin.services', compact('services', 'categories'));
    }

    public function features()
    {

        $features = Features::all();
        $featureLists = FeatureList::with('featureListMores')->get();

        return view ('admin.features', compact('features', 'featureLists'));
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

        $contacts = ContactInfo::all();

        return view ('admin.contact', compact('contacts'));
    }

}
