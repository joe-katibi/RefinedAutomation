<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\TestimonialsList;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $testimonialLists = TestimonialsList::all();
        return view('testimonials.index', compact('testimonials', 'testimonialLists'));
    }

    public function storeTestimonial(Request $request)
    {
        Testimonial::create($request->only('slogan', 'description', 'status', 'created_by'));
        return redirect()->back();
    }

    public function storeTestimonialsList(Request $request)
    {
        TestimonialsList::create($request->only('name', 'avatar', 'profession', 'testimony', 'status', 'created_by'));
        return redirect()->back();
    }

    public function updateTestimonialStatus($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->status = !$testimonial->status;
        $testimonial->save();

        return redirect()->back();
    }

    public function updateTestimonialsListStatus($id)
    {
        $testimonialList = TestimonialsList::find($id);
        $testimonialList->status = !$testimonialList->status;
        $testimonialList->save();

        return redirect()->back();
    }
}
