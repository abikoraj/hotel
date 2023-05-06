<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
                return redirect()->back()->with('message', 'Invalid Email or Password');
            } else {
                return redirect()->route('dashboard');
            }
        } else {
            return view('auth.login');
        }
    }

    public function apiRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 1;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->hasFile('image')) {
            $user->image = $request->image->store('uploads/user', 'public');
        }
        $user->save();
        $user->accessToken = $user->createToken('authToken')->accessToken;
        // dd($user->accessToken);
        $data = $user->toArray();
        return response()->json($data);
    }

    public function apiLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $user->accessToken = $user->createToken('authToken')->accessToken;
            return response()->json($user->toArray());
        } else {
            return response("Wrong phone number or password.", 500);
        }
    }

    public function dashboard()
    {
        $rooms = Room::all()->count();
        $users = User::all()->count();
        $services = Service::all()->count();
        return view('index', compact('rooms', 'users', 'services'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
