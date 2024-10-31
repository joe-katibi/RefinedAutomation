<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqsList;
use Illuminate\Http\Request;

class FaqsController extends Controller
{

    public function storeFaq(Request $request)
    {
        Faq::create($request->only('slogan', 'description', 'status', 'created_by'));
        return redirect()->back();
    }

    public function storeFaqsList(Request $request)
    {
        FaqsList::create($request->only('faqs_id', 'image', 'title', 'sub_title', 'status', 'created_by'));
        return redirect()->back();
    }

    public function inactivate($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->update(['status' => 0]);
        return redirect()->back();
    }

    public function inactivateFaqsList($id)
    {
        $faqsList = FaqsList::findOrFail($id);
        $faqsList->update(['status' => 0]);
        return redirect()->back();
    }

    // Additional methods for editing can be added here
}
