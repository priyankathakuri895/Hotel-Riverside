<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard()
{
    $totalBookings = \App\Models\Booking::count();

    $pendingBookings = \App\Models\Booking::where('status', 'pending')->count();

    $approvedBookings = \App\Models\Booking::where('status', 'approved')->count();

    $revenue = \App\Models\Booking::where('status', 'approved')->count() * 5000;

    $totalGuests = \App\Models\Booking::sum('guests');

    $bookings = \App\Models\Booking::latest()->get();

    return view('admin.dashboard', compact(
        'totalBookings',
        'pendingBookings',
        'approvedBookings',
        'revenue',
        'totalGuests',
        'bookings'
    ));
}

    public function bookings()
        {
            $bookings = \App\Models\Booking::latest()->get();

            return view('admin.bookings.index', compact('bookings'));
        }
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


        // ❌ Make room available again
        if ($booking->room_id) {
            $room = Room::find($booking->room_id);

            if ($room) {
                $room->update([
                    'is_available' => true
                ]);
            }
        }

        return back()->with('success', 'Booking rejected successfully');
    }

    // DELETE BOOKING
        public function delete($id)
            {
                $booking = Booking::findOrFail($id);

                // OPTIONAL: free room again
                if ($booking->room_id) {

                    $room = Room::find($booking->room_id);

                    if ($room) {

                        $room->update([
                            'is_available' => 1
                        ]);

                    }
                }

                $booking->delete();

                return back()->with('success', 'Booking deleted successfully');
            }
}