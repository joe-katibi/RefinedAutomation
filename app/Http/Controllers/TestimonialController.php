<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\TestimonialsList;
use Illuminate\Support\Facades\Auth;

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

        $request->validate([
            'slogan' => 'required|string',
            'description' => 'required|string',
        ]);

        Testimonial::create([
            'slogan' => $request->slogan,
            'description' => $request->description,
            'created_by' => Auth::user()->id,
            'status' => 1, // Set default status to active for new entries
        ]);
        return redirect()->back();
    }

    public function storeTestimonialsList(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'avatar' => 'required|string',
            'profession' => 'required|string',
            'testimony' => 'required|string',
        ]);

        TestimonialsList::create([
            'name' => $request->name,
            'avatar' => $request->avatar,
            'profession' => $request->profession,
            'testimony' => $request->testimony,
            'created_by' => Auth::user()->id,
            'status' => 1, // Set default status to active for new entries
        ]);
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
