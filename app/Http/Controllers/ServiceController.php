<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service');
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
        ]);

        $service = new Service();
        $service->name = $validatedData['name'];
        $service->description = $validatedData['description'];
        $service->price = $validatedData['price'];
        if ($request->hasFile('image')) {
            $service->image = $request->image->store('uploads/service$service', 'public');
        }

        $service->save();

        return redirect()->back()->with('success', 'Room created successfully.');
    }

    public function apiList()
    {
        $service = Service::all();
        return response()->json($service);
    }

    public function delete(Service $service)
    {
        if ($service->delete()) {
            return redirect()->route('room.list')->with('success', 'Room deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete room.');
        }
    }


    public function apiViewService($id)
    {
        $service = Service::find($id);
        return response()->json($service);
    }
}
