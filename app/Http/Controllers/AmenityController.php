<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    public function index()
    {
        return view('amenity');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $amenity = new Amenity();
        $amenity->name = $request->name;
        $amenity->save();
        return back()->with('success', 'Amenity Added Successfully!');
    }

    public function delete(Amenity $amenity)
    {
        $amenity->delete();
        return back()->with('success', 'Amenity Deleted Successfully!');
    }
}
