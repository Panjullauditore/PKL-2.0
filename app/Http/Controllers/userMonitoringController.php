<?php

namespace App\Http\Controllers;


use App\Models\Review;
use App\Models\places;
use App\Models\Wishlist;
use App\Models\Favorites;
use App\Models\User;
use App\Models\Users;
use App\Models\countries;



class userMonitoringController extends Controller
{
    public function index()
    {
        $users = users::all();
        // Add your logic to fetch user data here
        return view('admin.userMonitoring', compact('users'));
    }

    public function monitoring($id)
    {
        $user = Users::findOrFail($id);
        $reviews = Review::where('userID', $user->id)->get();
        $reviews = $reviews->map(function ($review) {
            $place = Places::find($review->placeID);
            $review->placeName = $place ? $place->name : 'Unknown Place';
            $review->placeImage = $place ? $place->image : 'default.jpg';
            return $review;
        });
        $wishlist = Wishlist::where('userID', $user->id)->get();
        $wishlist = $wishlist->map(function ($wishlist) {
            $place = Places::find($wishlist->placeID);
            $wishlist->placeName = $place ? $place->name : 'Unknown Place';
            $wishlist->placeImage = $place ? $place->image : 'default.jpg';
            return $wishlist;
        });
        $favorites = Favorites::where('userID', $user->id)->get();
        $favorites = $favorites->map(function ($favorite) {
            $place = Places::find($favorite->placeID);
            $favorite->placeName = $place ? $place->name : 'Unknown Place';
            $favorite->placeImage = $place ? $place->image : 'default.jpg';
            return $favorite;
        });
        $country = countries::where('id', $user->countryID)->first();
        return view('profile.monitoring', [
            'user' => $user,
            'reviews' => $reviews,
            'wishlist' => $wishlist,
            'favorites' => $favorites,
            'country' => $country
        ]);
    }

    public function show($id)
    {
        // Add your logic to fetch specific user data here
        return view('user-monitoring.show', compact('id'));
    }

    public function create()
    {
        return view('user-monitoring.create');
    }

    public function edit($id)
    {
        // Add your logic to fetch user data for editing
        return view('user-monitoring.edit', compact('id'));
    }
}