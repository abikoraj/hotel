<?php

namespace App\Http\Controllers;

use App\Models\BuyService;
use App\Models\Room;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class BuyServiceController extends Controller
{
    public function apiBuyService(Request $request)
    {
        $request->validate([
            "service_id" => "required|exists:services,id",
            "user_id" => "required|exists:users,id",
            "room_id" => "required|exists:rooms,id",
        ]);

        $buyService = new BuyService();
        $buyService->user_id = $request->user_id;
        $buyService->room_id = $request->room_id;
        $buyService->service_id = $request->service_id;
        $buyService->save();

        $user = User::find($request->user_id);
        $room = Room::find($request->room_id);
        $service = Service::find($request->service_id);

        return response()->json(compact('buyService', 'user', 'room', 'service'));
    }
}
