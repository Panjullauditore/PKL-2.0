<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use Illuminate\Http\Request;

class AddCulinaryController extends Controller
{
    public function index()
    {
        $culinaries = Culinary::all(); // Fetch all culinary data
        return view('admin.addculinary', compact('culinaries')); // Pass it to the view
    }
    
    public function edit($id)
    {
        $culinary = Culinary::findOrFail($id);
        return view('admin.editculinary', compact('culinary'));
    }
    

    public function store(Request $request)
    {
        // dd($request);
        

        $culinary = new Culinary();
        $culinary->name = $request->culinary_name;
        $culinary->desc = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('culinaries', 'public');
            $culinary->image = $imagePath;
        }

        $culinary->save();

        return redirect()->route('addculinary.index');
    }

    public function addCulinary()
    {
        return view('admin.addculinary');
    }

}
