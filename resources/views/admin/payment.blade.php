@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <table id="paymentTable" class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>₱100</td>
                <td>Paid</td>
            </tr>
            <tr>
                <td>2</td>
                <td>₱200</td>
                <td>Unpaid</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#paymentTable').DataTable();
        });
    </script>
@endpush
