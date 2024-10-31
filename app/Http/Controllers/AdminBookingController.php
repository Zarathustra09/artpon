<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function dataTable()
    {
        $bookings = Booking::with('user')->get();
        return response()->json(['data' => $bookings]);
    }
}
