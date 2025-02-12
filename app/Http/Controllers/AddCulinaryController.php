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
        $request->validate([
            'culinary_name' => 'required',
            'description' => 'nullable',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'address' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $culinary = new Culinary();
        $culinary->name = $request->culinary_name;
        $culinary->description = $request->description;
        $culinary->email = $request->email;
        $culinary->phone = $request->phone;
        $culinary->address = $request->address;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('culinaries', 'public');
            $culinary->image = $imagePath;
        }

        $culinary->save();

        return redirect()->route('addculinaries.index');
    }

    public function addCulinary()
    {
        return view('admin.addculinary');
    }

}
