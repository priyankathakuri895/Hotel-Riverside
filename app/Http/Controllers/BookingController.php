<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after_or_equal:check_in',
            'guests' => 'required|integer|min:1',
            'room_type' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // 2. Save to database
         Booking::create([
        'user_id' => \Illuminate\Support\Facades\Auth::id(),   // ⭐ IMPORTANT FIX  // 👈 important
        'check_in' => $validated['check_in'],
        'check_out' => $validated['check_out'],
        'guests' => $validated['guests'],
        'room_type' => $validated['room_type'],
        'message' => $validated['message'] ?? null,
    ]);

        // 3. Redirect back with success message
        return redirect()->back()->with('success', '🎉 Booking submitted successfully!');
    }


        public function myBookings()
        {
            $bookings = Booking::where('user_id', Auth::id())
                ->latest()
                ->get();

            return view('frontend.my-bookings', compact('bookings'));
        }
        public function cancel($id)
            {
                $booking = Booking::where('id', $id)
                    ->where('user_id', Auth::id())
                    ->firstOrFail();

                $booking->delete();

                return redirect()->back()->with('success', 'Booking cancelled successfully');
            }
}   

