<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer');
    }

    public function dataTable()
    {
        $data = User::where('role', 0)->get();
        return response()->json(['data' => $data]);
    }


}
