<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function apiBooking(Request $request)
    {
        $request->validate([
            "room_id" => "required|exists:rooms,id",
            "check_in" => "required|date",
            "check_out" => "required|date",
        ]);

        $booking = new Booking();
        $booking->user_id = $request->user_id;
        $booking->room_id = $request->room_id;
        $booking->check_in = $request->check_in;
        $booking->check_out = $request->check_out;
        $booking->save();

        return response()->json($booking);
    }
}
