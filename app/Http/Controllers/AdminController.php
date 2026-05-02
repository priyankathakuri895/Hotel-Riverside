<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function approve($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->status = 'approved';
        $booking->save();

        // 🚨 AUTO ROOM UPDATE
        $room = Room::where('type', $booking->room_type)
                    ->where('is_available', true)
                    ->first();

        if ($room) {
            $room->is_available = false;
            $room->save();
        }

        return back();
    }
}