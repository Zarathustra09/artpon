@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="container-fluid bg-light py-1 my-1 mt-0">
        <div class="container text-center">
            <h1 class="display-5 mb-1">Booking History</h1>
        </div>
    </div>

    <!-- Booking History Start -->
    <div class="container my-5">
        <div id="Bookings" class="dashboard-section">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable">
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
                    @foreach($data as $booking)
                        <tr>
                            <td>{{ $booking->service }}</td>
                            <td>{{ $booking->product }}</td>
                            <td>{{ $booking->color }}</td>
                            <td>{{ $booking->theme }}</td>
                            <td>{{ $booking->event_type }}</td>
                            <td>{{ $booking->date }}</td>
                            <td>{{ $booking->message }}</td>
                            <td>{{ $booking->delivery_option }}</td>
                            <td>{{ $booking->delivery_address }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
