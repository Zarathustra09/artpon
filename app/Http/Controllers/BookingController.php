<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        return view('guest.booking');
    }

    public function bookingHistoryIndex()
    {
        $data = Booking::where('user_id', Auth::id())->get();
        return view('guest.booking_history', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required|string',
            'product' => 'required|string',
            'color' => 'required|string',
            'theme' => 'nullable|string',
            'event_type' => 'required|string',
            'date' => 'required|date',
            'message' => 'nullable|string',
            'delivery_option' => 'required|in:Pickup,Deliver',
            'delivery_address' => 'nullable|string',
        ]);


        $booking = new Booking([
            'user_id' => Auth::id(),
            'service' => $request->input('service'),
            'product' => $request->input('product'),
            'color' => $request->input('color'),
            'theme' => $request->input('theme'),
            'event_type' => $request->input('event_type'),
            'date' => $request->input('date'),
            'message' => $request->input('message'),
            'delivery_option' => $request->input('delivery_option'),
            'delivery_address' => $request->input('delivery_address'),
        ]);

        $booking->save();

        return redirect()->route('booking.index')->with('success', 'Booking created successfully.');
    }
}
