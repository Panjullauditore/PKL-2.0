<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;
use App\Models\Category;
use App\Models\Culinaries;
use App\Models\Tags;
use App\Models\places_tags;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\menu;

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
            $place->image = $request->file('image')->store('img/places');
            // dd($place->image);
        }

        $place->save();
        // dd($request);
        return redirect()->route('addplaces.index')->with('success', 'Place added successfully');
        
    }



    public function destroy($id)
    {
    // Mencari tempat berdasarkan ID
    $place = places::findOrFail($id);

    places_tags::where('placeID', $id)->delete();
    $place->delete();

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('addplaces.index')->with('success', 'Place deleted successfully');
    }
    public function edit($id)
    {
        // Mencari tempat berdasarkan ID
        $place = places::findOrFail($id);
        $tags = tags::all();
        $last_tags = tags::join('places_tags', 'tags.id', '=', 'places_tags.tagID')
            ->where('places_tags.placeID', $id)
            ->get();

        $menu = Menu::where('placeID', $id)->get(); // Filter menu dulu

        $culinaries = Culinaries::leftJoin('menu', function($join) use ($id) {
            $join->on('culinaries.id', '=', 'menu.culinaryID')
                 ->where('menu.placeID', '=', $id);
        })
        ->select(
            'culinaries.*', 
            'menu.*', 
            DB::raw('culinaries.id as culinary_real_id') // Kolom baru untuk memastikan ID tetap ada
        )
        ->get();
         
        //dd($culinaries);

        // dd($last_tags);
        // Menampilkan halaman edit dengan data tempat
        return view('admin.addplacesedit', compact('place', 'tags', 'last_tags', 'culinaries'));

    }

    public function update(Request $request, $id)
    {
        // Menyimpan perubahan tempat
        $place = places::findOrFail($id);
        $place->name = $request->place_name;
        $place->desc = $request->description;
        $place->email = $request->email;
        $place->phoneNUM = $request->phone;

        //dd($request->category);
        // Menghapus tag lama
        DB::table('places_tags')->where('placeID', $id)->delete();
        foreach ($request->category as $tag) {
            $places_tags = new places_tags();
            $places_tags->placeID = $place->id;
            $places_tags->tagID = $tag;
            $places_tags->save();
        }

        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            if ($place->image) {
                Storage::delete('storage/' . $place->image);
            }
            $place->image = $request->file('image')->store('images', 'public');
        }
        //dd($place);
        $place->save();

        return redirect()->route('addplaces.index')->with('success', 'Place updated successfully');
    }

    public function additems(request $request, $id)
    {
        // Mencari tempat berdasarkan ID
        //dd($request);
        DB::table('menu')->where('placeID', $id)->delete();
        if ($request->culinaries == null) {
            return redirect()->back();
        }
        foreach ($request->culinaries as $culinary) {
            $menu = new menu();
            $menu->culinaryID = $culinary;
            $menu->placeID = $id;
            $menu->save();
        }

        // Menampilkan halaman additems dengan data tempat
        return redirect()->back();
    }

    public function create()
    {
        // Get all categories
        $categories = Category::all();

        // Return the view with the categories
        return view('admin.addplaces', compact('categories'));
    }
}
