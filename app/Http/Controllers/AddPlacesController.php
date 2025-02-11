<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Category;
use App\Models\Tags;

class AddPlacesController extends Controller
{

    public function index()
    {
        // Mengambil semua tempat yang telah ditambahkan
        $places = Place::all();

        // Mengambil semua tag
        $tags = tags::all();

        // Mengirim data places dan tags ke view
        return view('admin.addplaces', compact('places', 'tags'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'place_name' => 'required|string|max:255',
            'description' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'tag' => 'required|array', // Validasi bahwa tag dipilih
            'tag.*' => 'exists:tags,id', // Pastikan ID tag ada di tabel tags
            'image' => 'nullable|image|max:2048',
        ]);

        $place = new Place();
        $place->place_name = $request->place_name;
        $place->description = $request->description;
        $place->email = $request->email;
        $place->phone = $request->phone;
        $place->address = $request->address;

        if ($request->hasFile('image')) {
            $place->image = $request->file('image')->store('images', 'public');
        }

        $place->save();

        // Menyimpan relasi tag
        $place->tags()->attach($request->tag);

        return redirect()->route('addplaces.index')->with('success', 'Place added successfully');
    }



    public function destroy($id)
    {
    // Mencari tempat berdasarkan ID
    $place = Place::findOrFail($id);

    // Menghapus tempat dari database
    $place->delete();

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('addplaces.index')->with('success', 'Place deleted successfully');
    }
    public function edit($id)
    {
    // Mencari tempat berdasarkan ID
    $place = Place::findOrFail($id);

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
        $place = Place::findOrFail($id);
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
