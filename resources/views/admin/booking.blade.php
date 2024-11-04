@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <table id="bookingTable" class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Service</th>
                <th>Product</th>
                <th>Color</th>
                <th>Theme</th>
                <th>Event Type</th>
                <th>Date</th>
                <th>Message</th>
                <th>Delivery Option</th>
                <th>Delivery Address</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#bookingTable').DataTable({
                ajax: {
                    url: '{{ route('admin.bookings.data') }}',
                    dataSrc: 'data'
                },
                columns: [
                    { data: 'id' },
                    { data: 'user.name' },
                    { data: 'service' },
                    { data: 'product' },
                    {
                        data: 'color',
                        render: function(data, type, row) {
                            return '<div style="width: 20px; height: 20px; background-color: ' + data + ';"></div>';
                        }
                    },
                    { data: 'theme' },
                    { data: 'event_type' },
                    { data: 'date' },
                    { data: 'message' },
                    { data: 'delivery_option' },
                    { data: 'delivery_address' },
                    { data: 'status' }
                ]
            });
        });
    </script>
@endpush
