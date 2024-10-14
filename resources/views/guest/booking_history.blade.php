@extends('layouts.app')

@section('content')
        <!-- Hero Section -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center">
                <h1 class="display-1 mb-4">Booking History</h1>
            </div>
    </div>

            <!-- Booking History Start -->

            <div class="container my-5">
        <div id="Bookings" class="dashboard-section">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                                <th>Service</th>
                                <th>Product</th>
                                <th>Color</th>
                                <th>Theme</th>
                                <th>Event Type</th>
                                <th>Date</th>
                                <th>Order Details</th>
                                <th>Pickup/Delivery</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody id="bookingHistoryTable">
                            <!-- Booking records will be dynamically inserted here -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Booking History End -->
@endsection
