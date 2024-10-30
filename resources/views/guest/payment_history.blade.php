@extends('layouts.app')

@section('content')
    <!-- Payment Records Start -->
    <div class="container my-5">
        <div class="payment-records">
            <h2>Payment History</h2>
            <table class="payment-table" id="paymentTable">
                <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Date</th>
                    <th>Service</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody id="paymentHistory">
                <!-- Example rows -->
                <!-- These rows should be dynamically populated -->
                <tr>
                    <td>001</td>
                    <td>2024-06-01</td>
                    <td>Custom Styrofoam Sculpture</td>
                    <td>₱100</td>
                    <td>Paid</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>2024-06-05</td>
                    <td>Premium Styrofoam Art</td>
                    <td>₱150</td>
                    <td>Paid</td>
                </tr>
                <!-- End of example rows -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- Payment Records End -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#paymentTable').DataTable();
        });
    </script>
@endpush
