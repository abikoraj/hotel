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
        // return $request->all();
        $foodCategory = new RoomCategory();
        $foodCategory->name = $request->name;
        // dd($foodCategory);
        $foodCategory->save();
        return back()->with('success', 'Room Category Added Successfully!');
    }

    public function update(Request $request, RoomCategory $roomCategory)
    {
        $request->validate([
            'name' => 'required'
        ]);
        // return $request->all();
        $roomCategory->name = $request->name;
        // dd($roomCategory);
        $roomCategory->save();
        return back()->with('success', 'Room Category Updated Successfully!');
    }

    public function delete(RoomCategory $roomCategory)
    {
        $roomCategory->delete();
        return back()->with('success', 'Room Category Deleted Successfully!');
    }
}
