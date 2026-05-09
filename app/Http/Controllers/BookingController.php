<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmationMail;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // SHOW BOOKING FORM
    public function create()
    {
        $rooms = Room::where('is_available', 1)->get();
        return view('frontend.booking', compact('rooms'));
    }

    // STORE BOOKING
    public function store(Request $request)
    {
        // 1. VALIDATION
        $validated = $request->validate([
            'room_id'   => 'required|exists:rooms,id',
            'check_in'  => 'required|date',
            'check_out' => 'required|date|after_or_equal:check_in',
            'guests'    => 'required|integer|min:1',
            'message'   => 'nullable|string',
        ]);

        // 2. DOUBLE BOOKING CHECK
        $exists = Booking::where('room_id', $validated['room_id'])
            ->where('status', '!=', 'rejected')
            ->where(function ($query) use ($validated) {

                $query->whereBetween('check_in', [$validated['check_in'], $validated['check_out']])
                      ->orWhereBetween('check_out', [$validated['check_in'], $validated['check_out']])
                      ->orWhere(function ($q) use ($validated) {
                          $q->where('check_in', '<=', $validated['check_in'])
                            ->where('check_out', '>=', $validated['check_out']);
                      });

            })
            ->exists();

        if ($exists) {
            return back()->with('error', 'Sorry! This room is already booked for selected dates.');
        }

        // 3. CREATE BOOKING
        $booking = Booking::create([
            'user_id'   => Auth::id(),
            'name'      => Auth::user()->name,
            'email'     => Auth::user()->email,
            'room_id'   => $validated['room_id'],
            'check_in'  => $validated['check_in'],
            'check_out' => $validated['check_out'],
            'guests'    => $validated['guests'],
            'message'   => $validated['message'] ?? null,
            'status'    => 'pending',
        ]);
        // SEND CONFIRMATION EMAIL
        Mail::to(Auth::user()->email)
            ->send(new BookingConfirmationMail($booking));

        // 4. MARK ROOM AS UNAVAILABLE
        $room = Room::find($validated['room_id']);

        if ($room) {
            $room->update([
                'is_available' => false
            ]);
        }

        return back()->with('success', '🎉 Booking submitted successfully!');
    }

    // MY BOOKINGS
    public function myBookings()
    {
        $bookings = Booking::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('frontend.my-bookings', compact('bookings'));
    }

    // CANCEL BOOKING
    public function cancel($id)
    {
        $booking = Booking::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        // FREE ROOM
        if ($booking->room_id) {
            Room::where('id', $booking->room_id)
                ->update(['is_available' => true]);
        }

        $booking->delete();

        return back()->with('success', 'Booking cancelled successfully');
    }
}