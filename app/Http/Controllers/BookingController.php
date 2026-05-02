<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

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
        Booking::create($validated);

        // 3. Redirect back with success message
        return redirect()->back()->with('success', '🎉 Booking submitted successfully!');
    }
}