<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function index()
    {
        $services = Service::with('products')->get();
        return view('guest.booking', compact('services'));
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
            'price' => 'required|numeric',

        ]);

        $service = Service::find($request->input('service'));
        $product = Product::find($request->input('product'));

        if (!$service) {
            return back()->withErrors(['service' => 'Invalid service selected.']);
        }

        DB::beginTransaction();

        try {
            $booking = new Booking([
                'user_id' => Auth::id(),
                'service' => $service->id,
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

            session([
                'total' => $request->input('price'),
                'service' => $service->name,
                'description' => 'Booking for ' . $product->name,
                'success' => 'Booking created successfully.',
                'booking_id' => $booking->id // Add booking_id to session
            ]);

            DB::commit();

            return view('guest.riderect');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'An error occurred while creating the booking. Please try again.']);
        }
    }
}
