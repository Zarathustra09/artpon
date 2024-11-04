<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function index()
    {
        return view('admin.payment');
    }

    public function dataTable()
    {
        $payments = Payment::all();
        return response()->json(['data' => $payments]);
    }
}
