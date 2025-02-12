<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Tambahkan ini
use \App\Models\places;
use \App\Models\tags;
use \App\Models\places_tags;
use \App\Models\review;
use \App\Models\menu;
use Illuminate\Support\Facades\DB;


class PlacesController extends Controller
{

    

    public function index($category)
    {
    $tag = $category;
    $placeIDs = places_tags::join('tags', 'places_tags.tagID', '=', 'tags.id')
        ->where('tags.name', $category)
        ->pluck('places_tags.placeID');
    // Ubah get() menjadi paginate()
    $places = places::whereIn('id', $placeIDs)->paginate(6); // Menampilkan 6 item per halaman
    return view('places.index', compact('places', 'tag'));
    }

    public function show($id)
    {
        $places = places::where('id', $id)->get();
        $place = $places[0] ?? abort(404);
        $tags = places_tags::where('placeID', $id)
            ->join('tags', 'places_tags.tagID', '=', 'tags.id')
            ->get();
        $menu = menu::where('placeID', $id)
            ->join('culinaries', 'menu.culinaryID', '=', 'culinaries.id')
            ->get();
        $reviews = review::where('placeID', $id)
            ->join('users', 'review.userID', '=', 'users.id') // Ubah 'reviews' menjadi 'review'
            ->get();
        $thisUserReview = review::where('userID', Auth::id())->where('placeID', $id)->get();
        
        return view('places.show', compact('place', 'reviews', 'tags', 'menu', 'thisUserReview'));
    }


    public function storeReview(Request $request, $placeId)
    {
        try {
            
            // Validasi input
            $validated = $request->validate([
                'rating' => 'required|integer|min:1|max:5',
                'desc' => 'required|string|min:3'
            ]);

            // Simpan review
            $review = review::create([
                'userID' => Auth::id(),
                'placeID' => $placeId,
                'rating' => $request->rating,
                'desc' => $request->desc
            ]);

            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()
                
                ->withInput();
        }
    }
}