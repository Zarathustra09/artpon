<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('user')->get();
        return view('admin.booking', compact('bookings'));
    }

    public function dataTable()
    {
        $bookings = Booking::with('user')->get();
        return response()->json(['data' => $bookings]);
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        Log::info($booking);
        return response()->json($booking);
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        // Log the incoming request data
        Log::info('Request data: ', $request->all());

        // Check if request data is empty
        if (empty($request->all())) {
            Log::warning('Request data is empty');
        }

        // Update the booking
        $booking->update($request->all());

        // Log the updated booking
        Log::info('Updated booking: ', $booking->toArray());

        return response()->json(['message' => 'Booking updated successfully']);
    }
}
