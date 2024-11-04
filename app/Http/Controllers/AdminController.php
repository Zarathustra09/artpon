<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $usersByMonth = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('role', 0)
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $usersData = array_fill(1, 12, 0);
        foreach ($usersByMonth as $month => $count) {
            $usersData[$month] = $count;
        }

        $bookingsByMonth = Booking::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $bookingsData = array_fill(1, 12, 0);
        foreach ($bookingsByMonth as $month => $count) {
            $bookingsData[$month] = $count;
        }

        $bookingsByStatus = Booking::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray();

        return view('admin.admin_dashboard', [
            'usersData' => $usersData,
            'bookingsData' => $bookingsData,
            'bookingsByStatus' => $bookingsByStatus
        ]);
    }
}
