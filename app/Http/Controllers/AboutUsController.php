<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'slogan' => 'required|string',
            'description' => 'required|string',
        ]);

        AboutUs::create([
            'slogan' => $request->slogan,
            'description' => $request->description,
            'created_by' => Auth::user()->id,
            'status' => 1, // Set default status to active for new entries
        ]);

        return redirect()->route('admin.about')->with('success', 'Entry created successfully.');
    }

    public function edit($id)
    {
        $entry = AboutUs::findOrFail($id);
        return view('about_us.edit', compact('entry'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'slogan' => 'required|string',
            'description' => 'required|string',
        ]);

        $entry = AboutUs::findOrFail($id);
        $entry->update([
            'slogan' => $request->slogan,
            'description' => $request->description,
            'edited_by' => Auth::user()->id,
        ]);

        return redirect()->route('admin.about')->with('success', 'Entry updated successfully.');
    }

    public function inactivate($id)
    {
        $entry = AboutUs::findOrFail($id);
        $entry->update(['status' => 0]); // Set status to inactive

        return redirect()->route('admin.about')->with('success', 'Entry inactivated successfully.');
    }
}
