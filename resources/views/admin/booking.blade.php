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
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>Pending</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#bookingTable').DataTable();
        });
    </script>
@endpush
