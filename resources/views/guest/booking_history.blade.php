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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="bookingHistoryTable">
                    @foreach($data as $booking)
                        @php
                            $service = \App\Models\Service::find($booking->service);
                            $product = \App\Models\Product::find($booking->product);
                        @endphp
                        <tr>
                            <td>{{ $service ? $service->name : 'N/A' }}</td>
                            <td>{{ $product ? $product->name : 'N/A' }}</td>
                            <td>{{ $booking->color }}</td>
                            <td>{{ $booking->theme }}</td>
                            <td>{{ $booking->event_type }}</td>
                            <td>{{ $booking->date }}</td>
                            <td>{{ $booking->status }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="showDetails({{ $booking->id }})">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
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
        function showDetails(bookingId) {
            var booking = @json($data).find(b => b.id === bookingId);
            Swal.fire({
                title: 'Booking Details',
                html: `
                    <p><strong>Message:</strong> ${booking.message || 'N/A'}</p>
                    <p><strong>Delivery Option:</strong> ${booking.delivery_option || 'N/A'}</p>
                    <p><strong>Delivery Address:</strong> ${booking.delivery_address || 'N/A'}</p>
                `,
                icon: 'info',
                confirmButtonText: 'Close'
            });
        }

        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
