@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <table id="productTable" class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Product A</td>
                <td>$10</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Product B</td>
                <td>$20</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#productTable').DataTable();
        });
    </script>
@endpush
