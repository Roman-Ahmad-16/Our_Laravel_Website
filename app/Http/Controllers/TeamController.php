<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = team::all();
        return view('adminDashboard.team.index', compact('teams'));
    }

    public function add()
    {
        return view('adminDashboard.team.add');
    }

    public function store(Request $request)
    {   
    $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'image' => 'nullable|file|mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/webp|max:9000',
    ]);

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('uploads/teams'), $imageName);

    Team::create([
        'name' => $request->name,
        'designation' => $request->designation,
        'image' => $imageName,
    ]);

    return redirect()->route('teams.index')->with('success', 'Team member added successfully!');
    }


    public function edit($id)
    {
        $team = team::findOrFail($id);

        return view('adminDashboard.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {   
    $team = team::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = [
        'name' => $request->name,
        'designation' => $request->designation,
    ];

    // Check if new image is uploaded
    if ($request->hasFile('image')) {
        // Delete old image
        $oldImagePath = public_path('uploads/teams/' . $team->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }

        // Upload new image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/teams'), $imageName);
        $data['image'] = $imageName;
    }

    $team->update($data);

    return redirect()->route('teams.index')->with('success', 'Team member updated successfully!');
    }   


    public function destroy($id)
    {    
        $team = team::findOrFail($id);
        $team->delete();
        return redirect()->route('teams.index');
    }
}

