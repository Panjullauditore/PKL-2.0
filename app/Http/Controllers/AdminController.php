<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AdminController extends Controller
{
    public function index()
    {
        $projects = [
            'Hotel' => 15,
            'Culinary' => 21,
            'Shopping' => 11,
            'Entertainment' => 17,
            'Tourist Attraction' => 13,
            'Tour Guide' => 19
        ];
        
        $projectTypes = array_keys($projects);
        
        return view('admin.dashboard', compact('projects', 'projectTypes'));
    }
    

    
    public function store(Request $request)
    {
        dd($request->all());
        $validated = $request->validate([
            'type' => 'required|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'places_name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string'
        ]);

        // Handle main image upload
        if ($request->hasFile('main_image')) {
            $imagePath = $request->file('main_image')->store('img/places', 'public');
            $validated['main_image'] = $imagePath;
        }

        
        $places = places::create([
            'type' => $validated['type'],
            'name' => $validated['places_name'],
            'location' => $validated['address'],
            'phoneNum' => $validated['phone'],
            'image' => $validated['main_image']
        ]);
        

        return response()->json([
            'success' => true,
            'type' => $validated['type'],
            'count' => places::where('type', $validated['type'])->count()
        ]);
    }
}
