@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <table id="paymentTable" class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Order Id</th>
                <th>Amount</th>
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
            $('#paymentTable').DataTable({
                ajax: {
                    url: '{{ route('admin.payments.data') }}',
                    dataSrc: 'data'
                },
                columns: [
                    { data: 'id' },
                    { data: 'external_id', title: 'Order Id' },
                    {
                        data: 'total',
                        render: function(data, type, row) {
                            return '₱' + data;
                        }
                    },
                    { data: 'status' }
                ]
            });
        });
    </script>
@endpush
