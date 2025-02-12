<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddCulinaryController extends Controller
{
    public function index()
    {
        $culinaries = Culinary::all(); // Fetch all culinary data
        return view('admin.addculinary', compact('culinaries')); // Pass it to the view
    }

    public function destroy($id)
    {    
        menu::where('culinaryID', $id)->delete();
        $culinary = Culinary::findOrFail($id);
        $culinary->delete();
        return redirect()->route('addculinary.index');
    }
    
    public function edit($id)
    {
        $culinary = Culinary::findOrFail($id);
        return view('admin.addculinaryedit', compact('culinary'));
    }

    public function update(Request $request, $id)
    {
        $culinary = Culinary::findOrFail($id);
        $culinary->name = $request->culinary_name;
        $culinary->desc = $request->description;

        if ($request->hasFile('image')) {
            if ($culinary->image) {
                Storage::delete('storage/' . $culinary->image);
            }
            $imagePath = $request->file('image')->store('img/culinaries', 'public');
            $culinary->image = $imagePath;
        }

        $culinary->save();
        return redirect()->route('addculinary.index');
    }
    

    public function store(Request $request)
    {
        // dd($request);
        

        $culinary = new Culinary();
        $culinary->name = $request->culinary_name;
        $culinary->desc = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img/culinaries', 'public');
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
