<?php

namespace App\Http\Controllers;

use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    public function index()
    {
        return view('roomCategory');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $roomCategory = new RoomCategory();
        $roomCategory->name = $request->name;
        $roomCategory->save();
        return back()->with('success', 'Room Category Added Successfully!');
    }

    public function delete(RoomCategory $roomCategory)
    {
        $roomCategory->delete();
        return back()->with('success', 'Room Category Deleted Successfully!');
    }
}
