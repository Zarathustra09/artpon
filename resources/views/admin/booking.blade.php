@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <table id="bookingTable" class="table">
            <thead>
            <tr>
                <th>Customer</th>
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
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->name }}</td>
                    <td>
                        @php
                            $service = \App\Models\Service::find($booking->service);
                        @endphp
                        {{ $service ? $service->name : 'N/A' }}
                    </td>
                    <td>
                        @php
                            $product = \App\Models\Product::find($booking->product);
                        @endphp
                        {{ $product ? $product->name : 'N/A' }}
                    </td>
                    <td>
                        <div style="width: 20px; height: 20px; background-color: {{ $booking->color }};"></div>
                    </td>
                    <td>{{ $booking->theme }}</td>
                    <td>{{ $booking->event_type }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" onclick="showDetails({{ $booking->id }})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm" onclick="editBooking({{ $booking->id }})">
                            <i class="fas fa-edit"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        function showDetails(bookingId) {
            var booking = @json($bookings).find(b => b.id === bookingId);
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

        function editBooking(bookingId) {
            var booking = @json($bookings).find(b => b.id === bookingId);
            Swal.fire({
                title: 'Edit Booking',
                html: `
            <form id="editBookingForm">
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="color" class="form-control" id="color" name="color" value="${booking.color}">
                </div>
                <div class="form-group">
                    <label for="theme">Theme</label>
                    <input type="text" class="form-control" id="theme" name="theme" value="${booking.theme}">
                </div>
                <div class="form-group">
                    <label for="event_type">Event Type</label>
                    <input type="text" class="form-control" id="event_type" name="event_type" value="${booking.event_type}">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="${booking.date}">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="pending" ${booking.status === 'pending' ? 'selected' : ''}>Pending</option>
                        <option value="confirmed" ${booking.status === 'confirmed' ? 'selected' : ''}>Confirmed</option>
                        <option value="cancelled" ${booking.status === 'cancelled' ? 'selected' : ''}>Cancelled</option>
                        <option value="completed" ${booking.status === 'completed' ? 'selected' : ''}>Completed</option>
                    </select>
                </div>
            </form>
        `,
                showCancelButton: true,
                confirmButtonText: 'Save',
                preConfirm: () => {
                    var form = document.getElementById('editBookingForm');
                    var formData = new FormData(form);
                    var data = {};
                    formData.forEach((value, key) => {
                        data[key] = value;
                    });
                    return fetch(`/admin/bookings/${bookingId}`, {
                        method: 'PUT',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify(data)
                    })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.json();
                        })
                        .catch(error => {
                            Swal.showValidationMessage(`Request failed: ${error}`);
                        });
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'success').then(() => {
                        location.reload();
                    });
                }
            });
        }

        $(document).ready(function() {
            $('#bookingTable').DataTable();
        });
    </script>
@endpush
