<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;
use App\Models\Tags;
use Illuminate\Support\Facades\Storage;
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
    
    public function addPlace()
    {
        $tags = Tags::all();
        return view('admin.addplaces', compact('tags'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'places_name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Handle main image upload
        if ($request->hasFile('main_image')) {
            $imagePath = $request->file('main_image')->store('img/places', 'public');
            $validated['main_image'] = $imagePath;
        }

        // Create place
        $place = places::create([
            'type' => $validated['type'],
            'name' => $validated['places_name'],
            'location' => $validated['address'],
            'phoneNum' => $validated['phone'],
            'image' => $validated['main_image']
        ]);

        // Attach tags if any
        if ($request->has('tags')) {
            $place->tags()->attach($request->tags);
        }

        // Handle gallery images if any
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $galleryPath = $image->store('img/places/gallery', 'public');
                // You might want to store these paths in a gallery table
                // For now, we'll assume there's a gallery relationship
                $place->gallery()->create(['image_path' => $galleryPath]);
            }
        }

        return response()->json([
            'success' => true,
            'type' => $validated['type'],
            'count' => places::where('type', $validated['type'])->count()
        ]);
    }

    public function update(Request $request, $id)
    {
        $place = Places::findOrFail($id);
        
        $validated = $request->validate([
            'places_name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id'
        ]);

        // Handle image update if new image is uploaded
        if ($request->hasFile('main_image')) {
            // Delete old image
            if ($place->image) {
                Storage::disk('public')->delete($place->image);
            }
            $imagePath = $request->file('main_image')->store('img/places', 'public');
            $place->image = $imagePath;
        }

        $place->update([
            'name' => $validated['places_name'],
            'location' => $validated['address'],
            'phoneNum' => $validated['phone']
        ]);

        // Sync tags
        if ($request->has('tags')) {
            $place->tags()->sync($request->tags);
        }

        return response()->json([
            'success' => true,
            'message' => 'Place updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $place = places::findOrFail($id);

        // Delete main image
        if ($place->image) {
            Storage::disk('public')->delete($place->image);
        }

        // Delete gallery images if any
        if ($place->gallery) {
            foreach ($place->gallery as $galleryImage) {
                Storage::disk('public')->delete($galleryImage->image_path);
            }
        }

        $place->delete();

        return response()->json([
            'success' => true,
            'message' => 'Place deleted successfully'
        ]);
    }

    // Helper method to get counts
    private function getProjectCounts()
    {
        return [
            'Hotel' => places::where('type', 'Hotel')->count(),
            'Culinary' => places::where('type', 'Culinary')->count(),
            'Shopping' => places::where('type', 'Shopping')->count(),
            'Entertainment' => places::where('type', 'Entertainment')->count(),
            'Tourist Attraction' => Places::where('type', 'Tourist Attraction')->count(),
            'Tour Guide' => places::where('type', 'Tour Guide')->count(),
        ];
    }
}