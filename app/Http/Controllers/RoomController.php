<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\Room;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create()
    {
        $room_cats = RoomCategory::all();
        $amenities = Amenity::all();
        return view('room.create', compact('amenities', 'room_cats'));
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'room_number' => 'required|string|max:255|unique:rooms',
            'description' => 'required|string',
            'no_of_bed' => 'required|integer|min:1',
            'status' => 'required|integer|in:1,2,3',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
            // 'amenities' => 'nullable|array',
            // 'amenities.*' => 'nullable|exists:amenities,id',
            'amenities' => 'required|array|min:1',
            'amenities.*' => 'exists:amenities,id',
            'room_category_id' => 'required|exists:room_categories,id',
        ]);

        $room = new Room();
        $room->name = $validatedData['name'];
        $room->room_number = $validatedData['room_number'];
        $room->description = $validatedData['description'];
        $room->no_of_bed = $validatedData['no_of_bed'];
        $room->status = $validatedData['status'];
        $room->price = $validatedData['price'];
        $room->room_category_id = $validatedData['room_category_id'];

        // Upload and store image
        if ($request->hasFile('image')) {
            $room->image = $request->image->store('uploads/room', 'public');
        }

        if ($room->save()) {
            if (!empty($validatedData['amenities'])) {
                $room->amenities()->sync($validatedData['amenities']);
            }
            return redirect()->route('room.create')->with('success', 'Room created successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to create room.');
        }

        // // Associate amenities
        // // if (!empty($validatedData['amenities'])) {
        // //     $room->amenities()->sync($validatedData['amenities']);
        // // }
        // // dd($room);
        // $room->save();

        // return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    public function list()
    {
        $rooms = Room::with('amenities')->get();
        return view('room.list', compact('rooms'));
    }

    public function delete(Room $room)
    {
        if ($room->delete()) {
            return redirect()->route('room.list')->with('success', 'Room deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete room.');
        }
    }

    public function apiList()
    {
        $rooms = Room::with('amenities')->get();
        return response()->json($rooms);
    }

    public function apiViewRoom($id)
    {
        $room = Room::with('amenities')->find($id);
        return response()->json($room);
    }
}
