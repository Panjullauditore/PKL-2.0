<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Review;
use App\Models\places;
use App\Models\Wishlist;
use App\Models\Favorites;
use App\Models\User;
use App\Models\Users;
use App\Models\countries;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        $user = Auth::user();
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
        //dd($wishlist);
        $favorites = Favorites::where('userID', $user->id)->get();
        $favorites = $favorites->map(function ($favorite) {
            $place = Places::find($favorite->placeID);
            $favorite->placeName = $place ? $place->name : 'Unknown Place';
            $favorite->placeImage = $place ? $place->image : 'default.jpg';
            return $favorite;
        });
        //dd($favorites);
        $country = countries::where('id', $user->countryID)->first();
        return view('profile.userProfile', [
            'user' => $request->user(),
            'reviews' => $reviews,
            'wishlist' => $wishlist,
            'favorites' => $favorites,
            'country' => $country,
        ]);
    }

    public function edit(Request $request): View
    {
        $countries = countries::all();
        return view('profile.edit', [
            'user' => $request->user(),
            'countries' => $countries,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        //dd($request->all());
        $user = users::findOrFail($request->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->countryID = $request->countryID;

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_photo')) {
            $image = $request->file('profile_photo');
            $imageName = 'img/profilePicture/' . time() . '.' . $image->getClientOriginalExtension();
            
            // Hapus foto lama jika bukan foto default
            if ($user->profile_photo_path != 'img/userProfile/userProfile.png') {
                Storage::delete($user->profile_photo_path);
                $image->storeAs($imageName);
                $user->profile_photo_path = $imageName;
            }}
    
            $request->user()->save();

        return redirect()->back()->with('success', 'Profile photo updated successfully');
    }

    

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}