<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // APPROVE BOOKING
    public function approve($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->status = 'approved';
        $booking->save();

        // ✅ Assign available room
        $room = Room::where('type', $booking->room_type)
            ->where('is_available', 1)
            ->first();

        if ($room) {
            $room->update([
                'is_available' => 0
            ]);

            $booking->update([
                'room_id' => $room->id
            ]);
        }

        return back()->with('success', 'Booking approved successfully');
    }

    // REJECT BOOKING
    public function reject($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->status = 'rejected';
        $booking->save();

        return back()->with('success', 'Booking rejected successfully');
    }
}