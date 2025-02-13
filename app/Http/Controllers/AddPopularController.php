<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Places;


class AddPopularController extends Controller
{
    // Display a listing of the popular items
    public function index()
    {
        $places = Places::all();
        return view('admin.addpopular', compact('places'));
    }

    // Store a newly created popular item in storage
    public function store($id)
    {
        
        $place = places::findOrFail($id);
        $place->ispopular = 1;
        $place->save();
        
        
        return redirect()->route('addplaces.index')->with('success', 'Popular item added successfully');
    }

    // Remove the specified popular item from storage
    public function remove($id)
    {
        
        $place = places::findOrFail($id);
        $place->ispopular = 0;
        $place->save();
        
        
        return redirect()->route('addplaces.index')->with('success', 'Popular item removed successfully');
    }
}