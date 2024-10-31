<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;

class ContactInfoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'created_by' => 'required|string',
        ]);

        ContactInfo::create($request->all());
        return redirect()->route('admin.contact')->with('success', 'Contact created successfully.');
    }

    public function edit($id)
    {
        $contact = ContactInfo::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'edited_by' => 'required|string',
        ]);

        $contact = ContactInfo::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('admin.contact')->with('success', 'Contact updated successfully.');
    }

    public function activate($id)
    {
        $contact = ContactInfo::findOrFail($id);
        $contact->update(['status' => 1]);

        return redirect()->route('admin.contact')->with('success', 'Contact activated successfully.');
    }
}
