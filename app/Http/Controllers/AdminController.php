<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\ContactInfo;
use App\Models\Services;
use App\Models\ServiceList;
use App\Models\Features;
use App\Models\FeatureList;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\TestimonialsList;
use App\Models\Offer;
use App\Models\OffersList;
use App\Models\Faq;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view ('admin.dashboard');
    }

    public function about()
    {
        $entries = AboutUs::all();
        return view ('admin.about', compact('entries'));
    }

    public function service()
    {
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

    public function blog()
    {
        $blogs = Blog::with('blogLists.blogListMores')->get();
        return view ('admin.blog', compact('blogs'));
    }

    public function team()
    {

        $teams = Team::all();
        return view ('admin.team', compact('teams'));
    }

    public function testimonial()
    {

        $testimonials = Testimonial::all();
        $testimonialLists = TestimonialsList::all();
        return view ('admin.testimonials',compact('testimonials', 'testimonialLists'));
    }

    public function offer()
    {
        $offers = Offer::all();
        $offersLists = OffersList::with('offersListMore')->get();
        return view ('admin.offers', compact('offers', 'offersLists'));
    }

    public function faqs()
    {
        $faqs = Faq::with('faqsList')->get();
        return view ('admin.faqs', compact('faqs'));
    }

    public function contactUs(){

        $contacts = ContactInfo::all();

        return view ('admin.contact', compact('contacts'));
    }

}
