<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slogan' => 'required|string',
            'description' => 'required|string',
            'name' => 'required|string',
            'avatar' => 'nullable|image',
            'job_title' => 'nullable|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedln' => 'nullable|url',
            'created_by' => 'required|string'
        ]);

        $validatedData['user_status'] = 0;  // Default status
        if ($request->hasFile('avatar')) {
            $validatedData['avatar'] = $request->file('avatar')->store('avatars');
        }

        Team::create($validatedData);
        return redirect()->back();
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $data = $request->only(['slogan', 'description', 'name', 'job_title', 'facebook', 'twitter', 'instagram', 'linkedln', 'edited_by']);

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars');
        }

        $team->update($data);
        return redirect()->route('teams.index');
    }

    public function activate($id)
    {
        $team = Team::findOrFail($id);
        $team->update(['user_status' => $team->user_status == 1 ? 0 : 1]);
        return redirect()->back();
    }
}
