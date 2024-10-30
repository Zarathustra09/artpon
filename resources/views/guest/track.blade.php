@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Your Orders</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="orderTable">
                            <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Example rows -->
                            <tr>
                                <td>001</td>
                                <td>Custom Styrofoam Sculpture</td>
                                <td>Shipped</td>
                                <td>2024-06-01</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Premium Styrofoam Art</td>
                                <td>Processing</td>
                                <td>2024-06-05</td>
                            </tr>
                            <!-- End of example rows -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#orderTable').DataTable();
        });
    </script>
@endpush
