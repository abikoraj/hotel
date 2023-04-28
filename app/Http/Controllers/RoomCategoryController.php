<?php

namespace App\Http\Controllers;

use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    public function index()
    {
        return view('admin.FoodCategory.app');
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
        return back()->with('success', 'Food Category Added Successfully!');
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
        return back()->with('success', 'Food Category Updated Successfully!');
    }

    public function delete(RoomCategory $roomCategory)
    {
        $roomCategory->delete();
        return back()->with('success', 'Food Category Deleted Successfully!');
    }
}
