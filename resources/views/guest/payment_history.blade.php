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
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->created_at->format('Y-m-d') }}</td>
                        <td>{{ $payment->service }}</td>
                        <td>₱{{ number_format($payment->total, 2) }}</td>
                        <td>{{ ucfirst($payment->status) }}</td>
                    </tr>
                @endforeach
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
