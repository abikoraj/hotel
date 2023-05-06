<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod()==='POST') {
            return $request->all();
        } else {
            return view('auth.login');
        }
    }

    public function register(Request $request)
    {
        if ($request->getMethod()==='POST') {
            return $request->all();
        } else {
            return view('auth.register');
        }
    }

    public function apiRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email= $request->email;
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
        $data=$user->toArray();
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

}
