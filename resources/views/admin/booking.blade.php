@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <table id="bookingTable" class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
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
                    { data: 'status' }
                ]
            });
        });
    </script>
@endpush
