@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <table id="customerTable" class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
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
            $('#customerTable').DataTable({
                ajax: {
                    url: '{{ route('admin.customers.data') }}',
                    dataSrc: 'data'
                },
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' }
                ]
            });
        });
    </script>
@endpush
