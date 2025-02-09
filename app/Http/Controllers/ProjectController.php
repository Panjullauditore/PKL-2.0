<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log; // Tambahkan import ini

class ProjectController extends Controller
{
    public function index()
    {
        $projectCounts = [
            'Hotel' => Project::where('type', 'Hotel')->count(),
            'Culinary' => Project::where('type', 'Culinary')->count(),
            'Shopping' => Project::where('type', 'Shopping')->count(),
            'Entertainment' => Project::where('type', 'Entertainment')->count(),
            'Tourist Attraction' => Project::where('type', 'Tourist Attraction')->count(),
            'Tour Guide' => Project::where('type', 'Tour Guide')->count(),
        ];

        return view('admin.projects.index', compact('projectCounts'));
    }

    public function store(Request $request)
    {
        try {
            Log::info('Request data:', $request->all());

            $validated = $request->validate([
                'type' => 'required|string',
                'business_name' => 'required|string',
                'address' => 'required|string',
                'phone' => 'required|string',
                'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // Store main image
            $mainImagePath = null;
            if ($request->hasFile('main_image')) {
                $mainImage = $request->file('main_image');
                $mainImageName = time() . '_' . $mainImage->getClientOriginalName();
                $mainImagePath = $mainImage->storeAs('public/projects', $mainImageName);
                Log::info('Main image stored at: ' . $mainImagePath);
            }

            // Store gallery images
            $galleryImages = [];
            if ($request->hasFile('gallery_images')) {
                foreach ($request->file('gallery_images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $path = $image->storeAs('public/projects/gallery', $imageName);
                    $galleryImages[] = $path;
                    Log::info('Gallery image stored at: ' . $path);
                }
            }

            // Create project
            $project = Project::create([
                'type' => $validated['type'],
                'business_name' => $validated['business_name'],
                'address' => $validated['address'],
                'phone' => $validated['phone'],
                'main_image' => $mainImagePath,
                'gallery_images' => $galleryImages
            ]);

            Log::info('Project created:', $project->toArray());

            return response()->json([
                'success' => true,
                'message' => 'Project added successfully',
                'count' => Project::where('type', $validated['type'])->count(),
                'type' => $validated['type']
            ]);

        } catch (\Exception $e) {
            Log::error('Error in project creation: ' . $e->getMessage());
            Log::error($e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'Error adding project: ' . $e->getMessage()
            ], 500);
        }
    }
}