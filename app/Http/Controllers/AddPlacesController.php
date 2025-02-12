<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;
use App\Models\Category;
use App\Models\Tags;
use App\Models\places_tags;
use Illuminate\Support\Facades\DB;

class AddPlacesController extends Controller
{

    public function index()
    {
        // Mengambil semua tempat yang telah ditambahkan
        $places = places::all();

        // Mengambil semua tag
        $tags = tags::all();

        // Mengirim data places dan tags ke view
        return view('admin.addplaces', compact('places', 'tags'));
    }



    public function store(Request $request)
    {
        //dd($request);
        
        $place = new places();
        $place->name = $request->place_name;
        $place->desc = $request->description;
        $place->email = $request->email;
        $place->phoneNum = $request->phone;
        $place->location = $request->address;
        $place->image = $request->image;
        $place->save();

        foreach ($request->category as $tag) {
            $places_tags = new places_tags();
            $places_tags->placeID = $place->id;
            $places_tags->tagID = $tag;
            $places_tags->save();
            
        }

        if ($request->hasFile('image')) {
            $place->image = $request->file('image')->store('img/places', 'public');
        }

        $place->save();

        return redirect()->route('addplaces.index')->with('success', 'Place added successfully');
        
    }



    public function destroy($id)
    {
    // Mencari tempat berdasarkan ID
    $place = places::findOrFail($id);

    // Menghapus tempat dari database
    $place->delete();

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('addplaces.index')->with('success', 'Place deleted successfully');
    }
    public function edit($id)
    {
    // Mencari tempat berdasarkan ID
    $place = places::findOrFail($id);

    // Menampilkan halaman edit dengan data tempat
    return view('admin.editplace', compact('place'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'place_name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // Menyimpan perubahan tempat
        $place = places::findOrFail($id);
        $place->place_name = $request->place_name;
        $place->description = $request->description;

        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            if ($place->image) {
                // Storage::delete('public/' . $place->image);
            }
            $place->image = $request->file('image')->store('images', 'public');
        }

        $place->save();

        return redirect()->route('addplaces.index')->with('success', 'Place updated successfully');
    }

    public function create()
    {
        // Get all categories
        $categories = Category::all();

        // Return the view with the categories
        return view('admin.addplaces', compact('categories'));
    }
}
